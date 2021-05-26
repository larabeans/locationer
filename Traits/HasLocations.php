<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Traits;

use Apiato\Core\Traits\MultiTenantableScope;

trait HasLocations
{

  /**
   * Get the entity's locations.
   *
   * @return \Illuminate\Database\Eloquent\Relations\MorphMany
   */
  public function locations()
  {
    return $this->morphMany(config('locationer.models.location'), 'locatable')->orderBy('created_at', 'desc');
  }

}
