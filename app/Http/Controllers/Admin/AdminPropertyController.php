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

class AdminPropertyController extends Controller
{
    //

    public function __construct() {

    }


    public function index() {

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
    		Log::info(json_encode($request->all()));
    		return redirect()->route("admin.property.add.features")->with("success", "Property Created Successfully");
    	}

    	return redirect()->back()->with("error", "Invalid Request");
    }

    public function addFeatures(Request $request) {

    	if($request->isMethod("GET")) {
    		return view("admin.property.add_features", ["features" => Feature::all()->toArray()]);
    	}

    	else if($request->isMethod("POST")) {

    	} 

		return redirect()->back()->with("error", "Invalid Request");    	



    }
}
