<?php

namespace App\Containers\Vendor\Locationer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class StateRepository
 */
class StateRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'country_id'=>'=',
        'name'=>'like',
        'code'=>'like',
        'country.name'=>'like'
    ];

}
