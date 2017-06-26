<?php

namespace App\Http\Controllers\Admin;

use App\Models\PropertyState;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPropertyStateController extends Controller
{
    public function index(){
        return view('admin.property_state.index',['property_states'=>PropertyState::all()]);
    }

    public function add(Request $request){
        if($request->isMethod('GET')){
            return view('admin.property_state.add');

        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'state'=>'required'
            ]);

            $property_state=PropertyState::where('state',$request->state)->first();
            if($property_state){
                return redirect()->back()->with('error', $property_state->state.' already exists');
            }
            $new_property_state=new PropertyState();
            $new_property_state->state=$request->state;
            $new_property_state->save();
            return redirect()->back()->with('success','New Property state added successfully');
        }
    }

    public function edit(Request $request,PropertyState $property_state){
        if($property_state && $request->isMethod('GET')){
            return view('admin.property_state.edit',compact('property_state'));

        }else if($property_state && $request->isMethod('POST')){
            $property_state->state=$request->state;
            $property_state->save();
            return redirect()->back()->with('success', 'Property state updated successfully');
        }
    }
    public function remove(Request $request){
        if($request->id){
            $property_state = PropertyState::find($request->id);
            if(is_null($property_state)) {
                return redirect()->back()->with("error", "Property state Not Found");
            }
            $property_state_name=$property_state->state;

            $result=$property_state->delete();
            if($result){
                return redirect()->back()->with("status", $property_state_name." has been deleted!");
            }else{
                return redirect()->back()->with("error", "Something went wrong. Try again...");
            }
        }
    }
}
