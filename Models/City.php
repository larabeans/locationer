<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Models;

use App\Ship\Parents\Models\Model;

class City extends Model
{
    protected $fillable = [
        "country_id",
        "state_id",
        "name",
        "latitude",
        "longitude"
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'cities';

    public $incrementing = true;

    protected $keyType = "int";

    public function country() {
        return $this->belongsTo('App\Containers\App\Containers\Vendor\Locationer\Models\Country', 'country_id', 'id');
    }

    public function state() {
        return $this->belongsTo('App\Containers\App\Containers\Vendor\Locationer\Models\State', 'state_id', 'id');
    }
}
