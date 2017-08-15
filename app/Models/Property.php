<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Property extends Model
{
    //
    protected $table = "properties";

    protected $guarded = [];

    public function author() {
    	return $this->belongsTo(User::class, "user_id", "id");
    }

    public function type() {
        return $this->hasOne(PropertyType::class, "id", "type_id");
    }

    public function state() {
        return $this->hasOne(PropertyState::class, "id", "type_id");
    }

    public function currency() {
        return $this->hasOne(Currency::class, "id", "currency_id");
    }
}
