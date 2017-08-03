<?php

namespace App\Http\Controllers\Admin;

use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPropertyTypeController extends Controller
{

    public function __construct() {
        $this->middleware("systemadmin");
    }

    public function index(){
        return view('admin.property_type.index',['property_types'=>PropertyType::all()]);
    }

    public function add(Request $request){
        if($request->isMethod('GET')){
            return view('admin.property_type.add');

        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'type'=>'required'
            ]);

            $property_type=PropertyType::where('type',$request->type)->first();
            if($property_type){
                return redirect()->back()->with('error', $property_type->type.' already exists');
            }
            $new_property_type=new PropertyType();
            $new_property_type->type=$request->type;
            $new_property_type->save();
            return redirect()->back()->with('success','New Property type added successfully');
        }
    }

    public function edit(Request $request,PropertyType $property_type){
        if($property_type && $request->isMethod('GET')){
            return view('admin.property_type.edit',compact('property_type'));

        }else if($property_type && $request->isMethod('POST')){
            $property_type->type=$request->type;
            $property_type->save();
            return redirect()->back()->with('success', 'Property type updated successfully');
        }
    }
    public function remove(Request $request){
        if($request->id){
            $property_type = PropertyType::find($request->id);
            if(is_null($property_type)) {
                return redirect()->back()->with("error", "Property type Not Found");
            }
            $property_type_name=$property_type->type;

            $result=$property_type->delete();
            if($result){
                return redirect()->back()->with("status", $property_type_name." has been deleted!");
            }else{
                return redirect()->back()->with("error", "Something went wrong. Try again...");
            }
        }
    }
}
