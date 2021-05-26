<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Traits;

use App\Containers\App\Containers\Vendor\Locationer\Models\Location;

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
