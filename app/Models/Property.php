<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Property extends Model
{
    //
    protected $table = "properties";


    public function author() {
    	return $this->belongsTo(User::class);
    }
}
