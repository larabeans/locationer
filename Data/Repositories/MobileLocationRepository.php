<?php

namespace App\Containers\Vendor\Locationer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class MobileLocationRepository
 */
class MobileLocationRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
