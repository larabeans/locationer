<?php

namespace App\Containers\Vendor\Locationer\Traits;

trait HasMobileLocation
{

    /**
     * Get the entity's locations.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function location()
    {
        if (config('locationer.installed', false) && config('locationer.enabled', false)) {
            return $this->morphOne('locationer.models.mobile-location', 'locatable')->orderBy('created_at', 'desc');
        }

        return 'Location container is not installed';
    }

}
