<?php

namespace App\Containers\Vendor\Locationer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CountryRepository
 */
class CountryRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'name' => 'like',
        //'states.name'=>'like'
    ];
}
