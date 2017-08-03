<?php

namespace App\Http\Controllers\Admin;

use App\Models\Property;
use App\Models\User;
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

    	return view("admin.dashboard.index", $viewData);
    }
}
