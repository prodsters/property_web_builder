<?php

namespace App\Http\Controllers\Front;

use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewData = [];
        $viewData["propertyTypes"] = PropertyType::all();

        return view('front.index', $viewData);
    }


    public function properties() {
        $properties = Property::where("is_public", true)->latest()->get()->toArray();
        Log::info("property count " . count($properties) );
        return view("front.properties.index",
            [
                "properties" => $properties
            ]);
    }

    public function detail($id) {
        $property = null;

        if(is_null($id) || is_null($property = Property::find($id)) ) {
            return redirect()->back()->with("error", "We are sorry we can't find that property! try another one");
        }

        return view("front.properties.view", ["property" => $property]);
    }

    public function propertiesByType($type) {
        $properties = null;


        if($type == "sale") {
            $properties = Property::where([ ["is_public", true], ["sale", true] ])->latest()->get()->toArray();
            $type = "For Sale";
        }
        if($type == "rent") {
            $type = "For Rent";
            $properties = Property::where([ ["is_public", true], ["rental", true] ])->latest()->get()->toArray();
        }

//        Log::info("properties");
//        Log::info($properties);

        return view("front.properties.index", ["properties" => $properties, "type" => $type]);
    }


    public function find(Request $request) {

        Log::info($request);

        if(is_null($request->type) && is_null($request->rent_sale)
            && is_null($request->min_price) && is_null($request->max_price)) {
            Log::info("all Null");
            return redirect()->route("front.properties");
        }


        $properties = Property::whereNotNull("id");

        if(!is_null($request->type)) {
            $properties = $properties->where("type_id", $request->type);
        }

        if(!is_null($request->rent_sale) && $request->rent_sale = "rent") {
            $properties = $properties->where("rental", true);
        }

        if(!is_null($request->rent_sale) && $request->rent_sale = "sale") {
            $properties = $properties->where("sale", true);
        }

        if(!is_null($request->min_price)) {
            $price = ($request->rent_sale == "sale") ? "current_selling_price" : "current_rental_price";
            $properties = $properties->where($price, ">=", $request->min_price);
        }

        if(!is_null($request->max_price)) {
            $price = ($request->rent_sale == "sale") ? "current_selling_price" : "current_rental_price";
            $properties = $properties->where($price, "<=", $request->max_price);
        }

        $properties =  $properties->get()->toArray();

        Log::info("final properties");
        Log::info(count($properties));
        Log::info($properties);

        return view("front.properties.index", ["properties" => $properties]);

    }
}
