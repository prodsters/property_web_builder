<?php

namespace App\Http\Controllers\Front;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('front.index');
    }


    public function properties() {

        return view("front.properties",
            [
                "properties" => Property::where("is_public", true)->latest()->get()->toArray()
            ]);
    }

    public function detail($id) {
        $property = null;

        if(is_null($id) || is_null($property = Property::find($id)) ) {
            return redirect()->back()->with("error", "We are sorry we can't find that property! try another one");
        }

        return view("front.view", ["property" => $property]);
    }
}
