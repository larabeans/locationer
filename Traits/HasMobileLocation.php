<?php

namespace App\Containers\Larabeans\Locationer\Traits;

use App\Containers\Larabeans\Locationer\Models\Location;

trait HasMobileLocation
{
    /**
     * Get the entity's locations.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function location()
    {
        return $this->morphOne(Location::class, 'locatable')->orderBy('created_at', 'desc');
    }
}
