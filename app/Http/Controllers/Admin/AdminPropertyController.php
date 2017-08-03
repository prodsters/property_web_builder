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
use Validator;

class AdminPropertyController extends Controller
{
    //

    public function __construct() {

    }


    /**
    *
    * This method will serve the properties index page of the admin dashboard
    * it will list all the properties
    */
    public function index() {
        if(Auth::user()->is_admin) {
            $property = Property::all();
        } else {
            $property = Property::where("user_id", Auth::id())->latest()->get();
        }
        return view("admin.property.index", ["properties" => $property]);
    }

    /**
    * this method will be called to add a new property afresh.
    * it will only add basic details, location info, and pricing info
    * on success, it will redirect the user back to the edit page of the created property
    * where the user can now add photos and property features.
    */
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
            
             $property = new Property();
             $property->title = $request->title;
             $property->description = $request->description;
             $property->type_id = $request->type_id;
             $property->state_id = $request->state_id;
             $property->bedroom_count = $request->bedroom_count;
             $property->bathroom_count = $request->bathroom_count;
             $property->garage_count = $request->garage_count;
             $property->plot_area = $request->plot_area;
             $property->construction_area = $request->construction_area;
             $property->area_unit = $request->area_unit;  
             $property->is_featured = !is_null($request->is_featured) ? true : false;
             $property->is_public = !is_null($request->is_public) ? true : false;

             $property->sale = !is_null($request->sale) ? true : false;
             $property->rental = !is_null($request->rental) ? true : false;
             $property->current_selling_price = $request->current_selling_price;
             $property->current_rental_price = $request->current_rental_price;
             $property->original_selling_price = $request->original_selling_price;
             $property->original_rental_price = $request->original_rental_price;
             $property->currency_id = $request->currency_id;
             $property->user_id = Auth::id();
             $property->reference_no = str_random(5);

             $property->street_address = $request->street_address;
             $property->street_number = $request->street_number;
             $property->city = $request->city;
             $property->region = $request->region;
             $property->country = $request->country;
             $property->postal_code = $request->postal_code;

             $property = Property::create($property->toArray());
            
            return redirect()->route("admin.property.edit", ["id" => $property->id])->with("success", "Property Created Successfully, Use the tab to add photos, features and change other settings.");
    	}

    	return redirect()->back()->with("error", "Invalid Request");
    }


    public function deleteProperty(Request $request) {

        Log::info("delete property invoked");
        Log::info($request->all());

         //validate
          $validator = Validator::make($request->all(), [
            'id' => "required"
            ], 
            [
              "id.required" => "Invalid Request, Incomplete Parameter"
            ])->validate();   

         $property = Property::find($request->id);
         
         if(is_null($property)) {
            return redirect()->back()->with("error", "Property Not Found");
         }

         Log::info("property before delettion");
         Log::info($property);

         $result = $property->delete();

         Log::info("delete result == " + $result);

         return redirect()->back()->with("status", "Property has been deleted!");
    }


    /**
    *
    * This will serve the editing page for a property
    */
    public function edit(Request $request, $id) {

    	if($request->isMethod("GET")) {

            $property = Property::find($id);
            if(is_null($property)) {
                return redirect()->back()->with("error", "Invalid Request, Object Not Found");
            }

    		return view("admin.property.edit", [
                "features" => Feature::all()->toArray(),
                "property_features" => PropertyFeature::where("property_id", $property->id)
                                            ->get()->pluck("feature_id")->all(),
                "property" => $property,
                "currencies" => Currency::all(),
                "photos" => Photo::where("property_id", $id)->get()->toArray(),
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

    /**
    * Async method for adding photos after creating property
    */
    public function addPhoto(Request $request) {

        // Log::info($request->all());
        
        if(Input::hasFile('file') && Input::file('file')->isValid() && !is_null($request->id))
        {

            $file = Input::file('file');

            $extension = $file->getClientOriginalExtension(); 

            $fileName = str_random(10) .'.'. $extension;

            $clientMimeType = $file->getClientMimeType();

            if(!preg_match("/^(image).+$/", $clientMimeType)) {
                Log::info("error not an image ". $clientMimeType);
                return response()->json(["error" => "Not an Image"], 200);
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

    /**
    * Async method for deleting photos of properties
    * I am returning 200 status code, so as to be able to handle the response in the jQuery onSuccess method
    * it's a known error afterall
    */
    public function deletePhoto(Request $request) {

            // Log::info("request image delete " . $request['image']);

            if(is_null($request->image) || is_null($request->id)) {
                return response()-json(["error" => "No Image Specified"], 200);
            }

            $photo = Photo::where([ 
                ["property_id", $request->id],
                ["url", $request->image]
                ]);

            if(!is_null($photo)) {
                $photo->delete();
            }

            Storage::disk('public')->delete($request->image);

            return response()->json(["success" => "success"], 200);
    }

    /**
    *  method for updating property location data
    * a form will actually be submitted to this route
    */
    public function updateLocation(Request $request) {

         // Log::info($request->all());

         //validate
          $validator = Validator::make($request->all(), [
            'property_id' => "required",
            'street_address' => 'required',
            'street_number' => 'required',
            'city' => 'required',
            'region' => 'required',
            "country" => "required",
            "postal_code" => "required"
            ], 
            [
                "property_id.required" => "Invalid Request, Incomplete Parameter"
            ])->validate();   

         $property = Property::find($request->property_id);
         
         if(is_null($property)) {
            return redirect()->back()->with("error", "Property Not Found");
         } 

         $property->street_address = $request->street_address;
         $property->street_number = $request->street_number;
         $property->city = $request->city;
         $property->region = $request->region;
         $property->country = $request->country;
         $property->postal_code = $request->postal_code;
         $property->save();

         return redirect()->back()->with("success", "Property Location Updated Successfully"); 

    }

    /**
    *
    * This method will update the basic details of the property
    */ 
    public function updateBasicDetails(Request $request) {

        //validate
          $validator = Validator::make($request->all(), [
            'property_id' => "required",
            'title' => 'required',
            'description' => "required",
            'type_id' => "required",
            "state_id" => "required",
            "bedroom_count" => "required",
            "bathroom_count" => "required",
            "garage_count" => "required",
            "plot_area" => "required",
            "construction_area" => "required",
            "area_unit" => "required"
            ], 
            [
              "property_id.required" => "Invalid Request, Incomplete Parameter"
            ])->validate();   

         $property = Property::find($request->property_id);
         
         if(is_null($property)) {
            return redirect()->back()->with("error", "Property Not Found");
         } 

         $property->title = $request->title;
         $property->description = $request->description;
         $property->type_id = $request->type_id;
         $property->state_id = $request->state_id;
         $property->bedroom_count = $request->bedroom_count;
         $property->bathroom_count = $request->bathroom_count;
         $property->garage_count = $request->garage_count;
         $property->plot_area = $request->plot_area;
         $property->construction_area = $request->construction_area;
         $property->area_unit = $request->area_unit;
         $property->save();

         return redirect()->back()->with("success", "Property Basic Details Updated Successfully");

    }

    /**
    * This method is used to update the pricing information form the Change Pricing tab
    * in the admin dashboard of editing properties
    */ 
    public function updatePricing(Request $request) {

        //validate
          $validator = Validator::make($request->all(), [
            'property_id' => "required",
            'currency_id' => 'required',
            ], 
            [
              "property_id.required" => "Invalid Request, Incomplete Parameter"
            ])->validate();   

         $property = Property::find($request->property_id);
         
         if(is_null($property)) {
            return redirect()->back()->with("error", "Property Not Found");
         } 

         $property->is_featured = !is_null($request->is_featured) ? true : false;
         $property->is_public = !is_null($request->is_public) ? true : false;
         $property->sale = !is_null($request->sale) ? true : false;
         $property->rental = !is_null($request->rental) ? true : false;
         $property->current_selling_price = $request->current_selling_price;
         $property->current_rental_price = $request->current_rental_price;
         $property->original_selling_price = $request->original_selling_price;
         $property->original_rental_price = $request->original_rental_price;
         $property->currency_id = $request->currency_id;
         $property->save();

         return redirect()->back()->with("status", "Property Pricing details updated Successfully");
    }

    /**
    * This method will be called to add new features to the property
    * if the features already exists for the property, it will not be created at all
    */
    public function addFeatures(Request $request) {

        Log::info($request->all());

        //validate
          $validator = Validator::make($request->all(), [
            'property_id' => "required",
            'ids' => 'required'
            ], 
            [
              "property_id.required" => "Invalid Request, Incomplete Parameter"
            ])->validate();   

            $property = Property::find($request->property_id);
         
         if(is_null($property)) {
            return redirect()->back()->with("error", "Property Not Found");
         }

         $idsArray = preg_split("/[,]/", $request->ids);
         array_pop($idsArray); //deletes the last'','
         Log::info("idsArray ");
         Log::info($idsArray);


         $superArray = [];

         foreach ($idsArray as $key => $value) {
            //create it when it's not there already for the property
            PropertyFeature::firstOrCreate([
                                    "property_id" => $property->id,
                                    "feature_id" => $value
                                ]);
         }

         return redirect()->back()->with("success", "Property Features Updated Successfully");
    }

        
}
