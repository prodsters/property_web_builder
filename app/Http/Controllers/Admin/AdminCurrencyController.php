<?php

namespace App\Http\Controllers\Admin;

use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCurrencyController extends Controller
{

    public function __construct() {
        $this->middleware("systemadmin");
    }

    public function index(){
        return view('admin.currency.index',['currencies'=>Currency::all()]);
    }

    public function add(Request $request){
        if($request->isMethod('GET')){
            return view('admin.currency.add');

        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'name'=>'required',
                'symbol'=>'required'
            ]);

            $currency=Currency::where(['name'=>$request->name,'symbol'=>$request->symbol])->first();
            if($currency){
                return redirect()->back()->with('error', $currency->name.' already exists');
            }
            $new_currency=new Currency();
            $new_currency->name=$request->name;
            $new_currency->symbol=$request->symbol;
            $new_currency->save();
            return redirect()->back()->with('success','New currency added successfully');
        }
    }

    public function edit(Request $request,Currency $currency){
        if($currency && $request->isMethod('GET')){
            return view('admin.currency.edit',compact('currency'));

        }else if($currency && $request->isMethod('POST')){
            $currency->name=$request->name;
            $currency->symbol=$request->symbol;
            $currency->save();
            return redirect()->back()->with('success', 'Currency updated successfully');
        }
    }
    public function remove(Request $request){
        if($request->id){
            $currency = Currency::find($request->id);
            if(is_null($currency)) {
                return redirect()->back()->with("error", "Currency Not Found");
            }
            $currency_name=$currency->name;

            $result=$currency->delete();
            if($result){
                return redirect()->back()->with("status", $currency_name." has been deleted!");
            }else{
                return redirect()->back()->with("error", "Something went wrong. Try again...");
            }
        }
    }
}
