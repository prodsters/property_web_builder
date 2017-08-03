<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/*
 * This class is used to control other admins that can post properties
 * it is meant for super-admins
 * */
class AdminUserController extends Controller
{

    public function __construct() {
        $this->middleware("systemadmin");
    }

    public function index(){
        return view('admin.user.index',['users'=>User::all()]);
    }

    public function remove(Request $request){
        if($request->id){
            $user = User::find($request->id);
            if(is_null($user)) {
                return redirect()->back()->with("error", "User Not Found");
            }

            if(Auth::id() == $user->id) {
                return redirect()->back()->with("error", "Though shall not delete yourself, oh son of man!");
            }

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
