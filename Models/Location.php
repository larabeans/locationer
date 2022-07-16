<?php

namespace App\Containers\Larabeans\Locationer\Models;

use App\Containers\Larabeans\Beaner\Parents\Models\Model;

class Location extends Model
{
    protected $fillable = [

        "locatable_type",
        "locatable_id",
        "address_line_1",
        "address_line_2",
        "city_id",
        "state_id",
        "country_id",
        "post_code",
        "latitude",
        "longitude",
        "tenant_id"
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
    protected $resourceKey = 'locations';


    /**
     * Get the locatable entity that the location belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function locatable()
    {
        return $this->morphTo();
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo('App\Containers\Larabeans\Locationer\Models\Country', 'country_id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo('App\Containers\Larabeans\Locationer\Models\State', 'state_id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo('App\Containers\Larabeans\Locationer\Models\City', 'city_id');
    }
}
