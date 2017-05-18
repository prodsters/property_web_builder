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


    public function handleUpload() {

        

    }
}
