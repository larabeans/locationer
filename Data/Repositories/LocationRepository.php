<?php

namespace App\Containers\Larabeans\Locationer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class LocationRepository
 */
class LocationRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'post_code' => '=',
        'states' => '=',
        'locatable_type' => "like"
    ];
}
