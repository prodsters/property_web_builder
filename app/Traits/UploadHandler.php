<?php
namespace App\traits;

use Input;
use Log;
use Storage;
use Image;


trait UploadHandler {

	/**
	*  handleProfileUpload.
	*
	*
	*	this method will use the Input class to get the profile picture associated with this user
	*	resgistration and move it to a folder in public dir
	*	it will return the url of the picture on success else null on error
	*
	*
	*
	* @return string imageName || default
	*/
	public function handleProfileUpload() {

		// Log::info("handleUpload called ". json_encode(Input::all()));              

		
			$file = Input::file('profilePic');
			$extension = $file->getClientOriginalExtension(); 
			$fileName = str_random(20) .'.'. $extension;
			$clientMimeType = $file->getClientMimeType();

			$original = config('image.profile.original.path') . $fileName;
			\Storage::disk('public')->put( $original , file_get_contents( $file->getRealPath()) );

			Self::processAvatar($fileName);
			return $fileName;
	}


    public function handleCoverUpload() {

        //this method will use the Input class to get the profile picture associated with this user
        // resgistration and move it to a folder in public dir
        //it will return the url of the picture on success else null on error

              // GET ALL THE INPUT DATA , $_GET,$_POST,$_FILES.
           
           // Log::info("handleCoverUpload called ". json_encode(Input::all()));

           $file = Input::file("coverPic");

           // Log::info("file = ". json_encode($file));

           if($file == null) {  
               // Log::info("file is null");
               return null;
           }

       
       //     // SET UPLOAD PATH 
            $destinationPath = 'images/cover'; 
           
       //      // GET THE FILE EXTENSION
            $extension = $file->getClientOriginalExtension(); 

            $originalFileName = $file->getClientOriginalName();

            $clientSize = $file->getClientSize();


            $clientMimeType = $file->getClientMimeType();

            // Log::info("file name = $originalFileName and extension = $extension \nmime type = $clientMimeType and size = $clientSize");

           if($clientSize > Constants::MAX_IMAGE_SIZE) {
              return Constants::FILE_TOO_LARGE_ERROR;
            }

            if(!file_exists($destinationPath) && !is_dir($destinationPath)) {
                mkdir($destinationPath);
            }
            $result = $file->move($destinationPath, $file->getClientOriginalName());

            // Log::info("move result = $result");

            if($result != null) {

                return $destinationPath."/".$originalFileName;
            }

            return null;
    }

    /**
     *  ProcessAvatar.
     *
     * @return void
     */
    private function processAvatar( $imageName )
    {

        // Log::info("imageName in processAvatar == $imageName");
        
        $original = config('image.profile.original.path') . $imageName;
        $image = Image::make( Storage::disk('public')->get($original) );

        // medium size
        $md_path = config('image.profile.md.path') . $imageName;
        $md_w = config('image.profile.md.size')[0];
        $md_h = config('image.profile.md.size')[1];
        $md_image = $image->fit($md_w, $md_h, function ($constraint) {
                        $constraint->upsize();
                    });
        Storage::disk('public')->put($md_path, $md_image->stream());

        // small size
        $sm_path = config('image.profile.sm.path') . $imageName;
        $sm_w = config('image.profile.sm.size')[0];
        $sm_h = config('image.profile.sm.size')[1];
        $sm_image = $image->fit($sm_w, $sm_h, function ($constraint) {
                        $constraint->upsize();
                    });
        Storage::disk('public')->put($sm_path, $sm_image->stream());

        $image->destroy();
    }

}