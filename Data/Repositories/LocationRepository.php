<?php

namespace App\Containers\Vendor\Locationer\Data\Repositories;

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
        // ...
    ];

}
