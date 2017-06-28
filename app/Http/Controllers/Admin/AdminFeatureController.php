<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminFeatureController extends Controller
{
    public function index(){
        return view('admin.feature.index',['features'=>Feature::all()]);
    }

    public function add(Request $request){
        if($request->isMethod('GET')){
            return view('admin.feature.add');

        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'name'=>'required'
            ]);

            $feature=Feature::where('name',$request->name)->first();
            if($feature){
                return redirect()->back()->with('error', $feature->name.' already exists');
            }
            $new_feature=new Feature();
            $new_feature->name=$request->name;
            $new_feature->save();
            return redirect()->back()->with('success','New Feature added successfully');
        }
    }

    public function edit(Request $request,Feature $feature){
        if($feature && $request->isMethod('GET')){
            return view('admin.feature.edit',compact('feature'));

        }else if($feature && $request->isMethod('POST')){
            $feature->name=$request->name;
            $feature->save();
            return redirect()->back()->with('success', 'Feature updated successfully');
        }
    }
    public function remove(Request $request){
        if($request->id){
            $feature = Feature::find($request->id);
            if(is_null($feature)) {
                return redirect()->back()->with("error", "Feature Not Found");
            }
            $feature_name=$feature->name;

            $result=$feature->delete();
            if($result){
                return redirect()->back()->with("status", $feature_name." has been deleted!");
            }else{
                return redirect()->back()->with("error", "Something went wrong. Try again...");
            }
        }
    }
}
