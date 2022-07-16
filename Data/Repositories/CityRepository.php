<?php

namespace App\Containers\Larabeans\Locationer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CityRepository
 */
class CityRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'name' => 'like',

    ];
}
