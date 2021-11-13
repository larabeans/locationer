<?php

namespace App\Containers\Vendor\Locationer\Traits;

use App\Containers\Vendor\Locationer\Models\Location;

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
