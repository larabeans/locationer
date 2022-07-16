<?php

namespace App\Containers\Larabeans\Locationer\Models;

use App\Ship\Parents\Models\Model;

class State extends Model
{
    protected $fillable = [
        "country_id",
        "name",
        "code"
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
    protected $resourceKey = 'states';

    public $incrementing = true;

    protected $keyType = "int";

    public function country()
    {
        return $this->belongsTo('App\Containers\Larabeans\Locationer\Models\Country', 'country_id', 'id');
    }

    public function cities()
    {
        return $this->hasMany('App\Containers\Larabeans\Locationer\Models\City', 'state_id', 'id');
    }
}
