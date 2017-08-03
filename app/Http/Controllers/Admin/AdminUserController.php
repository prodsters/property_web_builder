<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
	public function index(){
        return view('admin.user.index',['users'=>User::where('id', '!=', Auth::user()->id)->get()]);
    }

    public function remove(Request $request){
        if($request->id){
            $user = User::find($request->id);
            if(is_null($user)) {
                return redirect()->back()->with("error", "User Not Found");
            }
            // $feature_name=$feature->name;

            $result=$user->delete();
            if($result){
                return redirect()->back()->with("status", $user->first_name." ".$user->last_name." has been deleted!");
            }else{
                return redirect()->back()->with("error", "Something went wrong. Try again...");
            }
        }
    }

    public function show(User $user)
    {
        return view('admin.user.user', compact('user'));
    }
}
