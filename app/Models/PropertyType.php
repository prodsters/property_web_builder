<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    //
    protected $table = "property_types";

    public function property() {
        return $this->belongsTo(Property::class, "type_id", "id");
    }
}
