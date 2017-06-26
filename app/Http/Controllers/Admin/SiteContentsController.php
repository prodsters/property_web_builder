<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteContents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteContentsController extends Controller
{
    //About content
    public function about(Request $request){
        if($request->isMethod('GET')){
            $about=SiteContents::where(['id'=>SiteContents::SITE_CONTENT_ID])->first()->value('about');
            return view('admin.contents.about',compact('about'));
        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'about'=>'required'
            ]);
            $site_content=SiteContents::firstOrNew(['id'=>SiteContents::SITE_CONTENT_ID]);
            $site_content->about=$request->about;
            $site_content->save();

            return redirect()->back()->with('success','About content updated successfully');
        }
    }

    //Terms and Condition Content
    public function termsAndConditions(Request $request){
        if($request->isMethod('GET')){
            $terms_and_conditions=SiteContents::where(['id'=>SiteContents::SITE_CONTENT_ID])->first()->value('terms_and_conditions');
            return view('admin.contents.terms_and_conditions',compact('terms_and_conditions'));
        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'terms_and_conditions'=>'required'
            ]);
            $site_content=SiteContents::firstOrNew(['id'=>SiteContents::SITE_CONTENT_ID]);
            $site_content->terms_and_conditions=$request->terms_and_conditions;
            $site_content->save();

            return redirect()->back()->with('success','Terms and Conditions content updated successfully');
        }
    }

    //Contact content
    public function contact(Request $request){
        if($request->isMethod('GET')){
            $contact=SiteContents::where(['id'=>SiteContents::SITE_CONTENT_ID])->first()->value('contact');
            return view('admin.contents.contact',compact('contact'));

        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'contact'=>'required'
            ]);
            $site_content=SiteContents::firstOrNew(['id'=>SiteContents::SITE_CONTENT_ID]);
            $site_content->contact=$request->contact;
            $site_content->save();

            return redirect()->back()->with('success','Contact content updated successfully');
        }
    }

    //Footer Content
    public function footer(Request $request){
        if($request->isMethod('GET')){
            $footer=SiteContents::where(['id'=>SiteContents::SITE_CONTENT_ID])->first()->value('footer');
            return view('admin.contents.footer',compact('footer'));

        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'footer'=>'required'
            ]);
            $site_content=SiteContents::firstOrNew(['id'=>SiteContents::SITE_CONTENT_ID]);
            $site_content->footer=$request->footer;
            $site_content->save();

            return redirect()->back()->with('success','Footer content updated successfully');
        }
    }
}
