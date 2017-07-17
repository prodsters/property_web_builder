<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteContents extends Model
{
    const CONTENT_TERMS_AND_CONDITIONS_KEY='terms and conditions';
    const CONTENT_ABOUT_KEY='about';
    const CONTENT_CONTACT_KEY='contact';
    const CONTENT_FOOTER_KEY='footer';
    protected $guarded=[];
}
