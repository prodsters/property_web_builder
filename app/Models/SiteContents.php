<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteContents extends Model
{
    const CONTENT_TERMS_AND_CONDITIONS_KEY='terms and conditions';
    const CONTENT_ABOUT_KEY='about';
    const CONTENT_CONTACT_KEY='contact';
    const CONTENT_PRIVACY_POLICY_KEY='privacy policy';
    const CONTENT_FOOTER_KEY='footer';
    const CONTENT_TERMS_KEY='terms';
    const CONTENT_SOCIAL_MEDIA_KEY='social media';
    protected $guarded=[];
}
