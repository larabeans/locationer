<?php

namespace App\Containers\Vendor\Locationer\Models;

use App\Ship\Parents\Models\Model;


class Country extends Model
{
    protected $fillable = [
        "name",
        "alpha2",
        "alpha3",
        "isd",
        "capital",
        "currency",
        "native",
        "continent",
        "subcontinent",
        "emoji",
        "emoji_unicode"
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
    protected $resourceKey = 'countries';

    public $incrementing = true;

    protected $keyType = "int";

    public function states(){
        return $this->hasMany( 'App\Containers\Vendor\Locationer\Models\State', 'country_id', 'id');
    }

    public function cities() {
        return $this->hasMany('App\Containers\Vendor\Locationer\Models\City', 'country_id', 'id');
    }
}
