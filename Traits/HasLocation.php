<?php

namespace App\Containers\Larabeans\Locationer\Traits;

use App\Containers\Larabeans\Locationer\Models\Location;

trait HasLocation
{
    /**
     * Get the entity's location.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function location()
    {
        return $this->morphOne(Location::class, 'locatable')->orderBy('created_at', 'desc');
    }
}
