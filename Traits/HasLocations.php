<?php

namespace App\Containers\Vendor\Locationer\Traits;

trait HasLocations
{

    /**
     * Get the entity's locations.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function locations()
    {
        if (config('locationer.installed', false) && config('locationer.enabled', false)) {
            return $this->morphMany(config('locationer.models.location'), 'locatable')->orderBy('created_at', 'desc');
        }

        return 'Location container is not installed';
    }

}
