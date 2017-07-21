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
            $about=SiteContents::where(['key'=>SiteContents::CONTENT_ABOUT_KEY])->first();
            return view('admin.contents.about',compact('about'));
        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'about'=>'required'
            ]);
            $site_content=SiteContents::firstOrNew(['key'=>SiteContents::CONTENT_ABOUT_KEY]);
            $site_content->value=$request->about;
            $site_content->save();

            return redirect()->back()->with('success','About content updated successfully');
        }
    }

    //Terms and Condition Content
    public function termsAndConditions(Request $request){
        if($request->isMethod('GET')){
            $terms_and_conditions=SiteContents::where(['key'=>SiteContents::CONTENT_TERMS_AND_CONDITIONS_KEY])->first();
            return view('admin.contents.terms_and_conditions',compact('terms_and_conditions'));
        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'terms_and_conditions'=>'required'
            ]);
            $site_content=SiteContents::firstOrNew(['key'=>SiteContents::CONTENT_TERMS_AND_CONDITIONS_KEY]);
            $site_content->value=$request->terms_and_conditions;
            $site_content->save();

            return redirect()->back()->with('success','Terms and Conditions content updated successfully');
        }
    }

    //Contact content
    public function contact(Request $request){
        if($request->isMethod('GET')){
            $contact=SiteContents::where(['key'=>SiteContents::CONTENT_CONTACT_KEY])->first();
            return view('admin.contents.contact',compact('contact'));

        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'contact'=>'required'
            ]);
            $site_content=SiteContents::firstOrNew(['key'=>SiteContents::CONTENT_CONTACT_KEY]);
            $site_content->value=$request->contact;
            $site_content->save();

            return redirect()->back()->with('success','Contact content updated successfully');
        }
    }

    //Footer Content
    public function footer(Request $request){
        if($request->isMethod('GET')){
            $footer=SiteContents::where(['key'=>SiteContents::CONTENT_FOOTER_KEY])->first();
            return view('admin.contents.footer',compact('footer'));

        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'footer'=>'required'
            ]);
            $site_content=SiteContents::firstOrNew(['key'=>SiteContents::CONTENT_FOOTER_KEY]);
            $site_content->value=$request->footer;
            $site_content->save();

            return redirect()->back()->with('success','Footer content updated successfully');
        }
    }

    //Privacy Policy Content
    public function privacyPolicy(Request $request){
        if($request->isMethod('GET')){
            $privacy_policy=SiteContents::where(['key'=>SiteContents::CONTENT_PRIVACY_POLICY_KEY])->first();
            return view('admin.contents.privacy_policy',compact('privacy_policy'));

        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'privacy_policy'=>'required'
            ]);
            $site_content=SiteContents::firstOrNew(['key'=>SiteContents::CONTENT_PRIVACY_POLICY_KEY]);
            $site_content->value=$request->privacy_policy;
            $site_content->save();

            return redirect()->back()->with('success','Privacy Policy content updated successfully');
        }
    }

    //Terms Content
    public function terms(Request $request){
        if($request->isMethod('GET')){
            $terms=SiteContents::where(['key'=>SiteContents::CONTENT_TERMS_KEY])->first();
            return view('admin.contents.terms',compact('terms'));

        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'terms'=>'required'
            ]);
            $site_content=SiteContents::firstOrNew(['key'=>SiteContents::CONTENT_TERMS_KEY]);
            $site_content->value=$request->terms;
            $site_content->save();

            return redirect()->back()->with('success','Terms content updated successfully.');
        }
    }

    //Social Media Account Links Content
    public function socialMedia(Request $request){
        if($request->isMethod('GET')){
            $social_media=SiteContents::where(['key'=>SiteContents::CONTENT_SOCIAL_MEDIA_KEY])->first();
            return view('admin.contents.social_media',compact('social_media'));

        }else if($request->isMethod('POST')){
            $this->validate($request,[
                'social_media'=>'required'
            ]);
            $site_content=SiteContents::firstOrNew(['key'=>SiteContents::CONTENT_SOCIAL_MEDIA_KEY]);
            $site_content->value=$request->social_media;
            $site_content->save();

            return redirect()->back()->with('success','Social Media Profile Links content updated successfully.');
        }
    }
}

