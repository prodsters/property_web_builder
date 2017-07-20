<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
	public function index(){
        return view('admin.user.index',['users'=>User::all()]);
    }

    public function remove(Request $request){
        if($request->id){
            $feature = User::find($request->id);
            if(is_null($feature)) {
                return redirect()->back()->with("error", "User Not Found");
            }
            // $feature_name=$feature->name;

            $result=$feature->delete();
            if($result){
                return redirect()->back()->with("status", $feature->first_name." ".$feature->last_name." has been deleted!");
            }else{
                return redirect()->back()->with("error", "Something went wrong. Try again...");
            }
        }
    }
}
