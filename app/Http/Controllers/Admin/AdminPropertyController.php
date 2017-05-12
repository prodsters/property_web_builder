<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use App\Models\Property;
use App\Models\PropertyState;
use App\Models\PropertyFeature;

class AdminPropertyController extends Controller
{
    //

    public function __construct() {

    }


    public function index() {

    }

    public function add(Request $request) {

    	if($request->isMethod("GET")) {
    		return view("admin.property.add");
    	}
    	else if($request->isMethod("POST")) {

    		

    	}

    	return redirect()->back()->with("error", "Invalid Request");
    }
}
