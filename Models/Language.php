<?php

namespace App\Containers\Larabeans\Locationer\Models;

use App\Ship\Parents\Models\Model;

class Language extends Model
{
    protected $table ="languages";
    protected $fillable = [
        'name',
        'code'

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
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Language';

}
