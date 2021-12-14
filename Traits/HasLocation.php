<?php

namespace App\Containers\Vendor\Locationer\Traits;

trait HasLocation
{

    /**
     * Get the entity's locationer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function location()
    {
        if (config('locationer.installed', false) && config('locationer.enabled', false)) {
            return $this->morphOne(config('locationer.models.location'), 'locatable')->orderBy('created_at', 'desc');
        }

        return 'Location container is not installed';
    }

}
