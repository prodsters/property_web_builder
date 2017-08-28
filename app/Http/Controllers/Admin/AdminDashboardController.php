<?php

namespace App\Http\Controllers\Admin;

use App\Models\Property;
use App\Models\PropertyType;
use App\Models\User;
use Charts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminDashboardController extends Controller
{
    //

    public function __construct() {

    }

    public function index() {
        $viewData = [];
        $viewData["userCount"] = User::all()->count();
        $viewData['propertyCount'] = Property::all()->count();

        $chart = Charts::database(Property::all(), 'bar', 'google')
            ->title(" ")
            ->elementLabel("Property Types")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
            // ->template("material")
            // ->y_axis_title('Number of Units')
            ->groupBy('title');

            // dd($chart)->toArray();

    	return view("admin.dashboard.index", $viewData, compact('chart'));
    }
}
