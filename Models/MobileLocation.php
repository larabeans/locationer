<?php

namespace App\Containers\Larabeans\Locationer\Models;

//use App\Ship\Parents\Models\Model;
use App\Containers\Larabeans\Core\Parents\Models\Model;

class MobileLocation extends Model
{
    protected $fillable = [

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
    protected $resourceKey = 'mobilelocations';


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
}
