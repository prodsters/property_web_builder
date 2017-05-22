<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use App\Models\Property;
use App\Models\PropertyState;
use App\Models\PropertyFeature;
use App\Models\PropertyType;
use App\Models\Currency;
use App\Models\Feature;
use App\Models\Photo;
use Input;
use Auth;
use Storage; 

class AdminPropertyController extends Controller
{
    //

    public function __construct() {

    }


    public function index() {
        return view("admin.property.index", ["properties" => Property::all()]);
    }

    public function add(Request $request) {

    	if($request->isMethod("GET")) {

    		return view("admin.property.add", [
    			"types" => PropertyType::all(),
    			"states" => PropertyState::all(),
    			"currencies" => Currency::all()
    			]);
    	}
    	else if($request->isMethod("POST")) {

    		$this->validate($request, [
                "title" => "required|max:240",
                "description" => "required",
                "type_id" => "required",
                "state_id" => "required", 
                "bedroom_count" => "required",
                "bathroom_count" => "required",
                "garage_count" => "required",
                "plot_area" => "required",
                "construction_area" => "required",
                "area_unit" => "required",
                "currency_id" => "required",
                "street_address" => "required",
                "street_number" => "required",
                "city" => "required",
                "region" => "required",
                "country" => "required",
                "postal_code" => "required",
                ]);

            $requestArray = $request->except("_token");

            Log::info("request Array");
            Log::info($requestArray);

            if(array_key_exists("rental", $requestArray) && !is_null($requestArray['rental'])) {
                $requestArray['rental'] = true;
            }
            if(array_key_exists("sale", $requestArray) && !is_null($requestArray['sale'])) {
                $requestArray['sale'] = true;
            }
            if(array_key_exists("is_public", $requestArray) && !is_null($requestArray['is_public'])) {
                $requestArray['is_public'] = true;
            }

            $requestArray['user_id'] = Auth::id();
            $requestArray['reference_no'] = str_random(5);

            
            Log::info("after");
            Log::info($requestArray);

            Property::create($requestArray);
    		
            return redirect()->route("admin.property.add.features")->with("success", "Property Created Successfully");
    	}

    	return redirect()->back()->with("error", "Invalid Request");
    }

    public function edit(Request $request, $id) {

    	if($request->isMethod("GET")) {

            $property = Property::find($id);
            if(is_null($property)) {
                return redirect()->back()->with("error", "Invalid Request, Object Not Found");
            }

    		return view("admin.property.edit", [
                "features" => Feature::all()->toArray(),
                "property" => $property,
                "currencies" => Currency::all(),
                "photos" => Photo::where("property_id", $id),
                "types" => PropertyType::all(),
                "states" => PropertyState::all()
                ]);
    	}

    	else if($request->isMethod("POST")) {
            Log::info("post features");
            Log::info(Input::all());   

            return redirect()->route('admin.dashboard.index')->with("success", "Property Features Added Successfully"); 
    	} 

		return redirect()->back()->with("error", "Invalid Request");    	
    }


    public function addPhoto(Request $request) {

        Log::info($request->all());
        
        if(Input::hasFile('file') && Input::file('file')->isValid() && !is_null($request->id))
        {

            $file = Input::file('file');

            $extension = $file->getClientOriginalExtension(); 

            $fileName = str_random(10) .'.'. $extension;

            $clientMimeType = $file->getClientMimeType();

            if(!preg_match("/^(image).+$/", $clientMimeType)) {
                Log::info("error not an image ". $clientMimeType);
                return response()->json(["error" => "Not an Image"], 504);
            }

            $original = config('image.profile.original.path') . $fileName;

            \Storage::disk('public')->put( $original , file_get_contents( $file->getRealPath()) );
            
            //persist the record to the db
            $photo = new Photo();
            $photo->property_id = $request->id;
            $photo->url = $original;
            $photo->save();

            return response()->json(["url" => $original], 200);
        }
        
        return response()->json(["error" => "No File Selected"], 504);
    }

    public function deletePhoto(Request $request) {

            Log::info("image delete called");
            Log::info($request->all());
            Log::info("request image " . $request['image']);

            if(is_null($request->image)) {
                return response()-json(["error" => "No Image Specified"], 504);
            }


            Log::info("visibility " . Storage::disk('public')->getVisibility($request->image));            
            Log::info("size " . Storage::disk('public')->size($request->image));
            Photo::find($request->id)->delete();
            Storage::disk('public')->delete($request->image);

            return response()->json(["success" => "success"], 200);
    }
        
}
