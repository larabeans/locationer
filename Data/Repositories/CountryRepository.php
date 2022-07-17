<?php

namespace App\Containers\Larabeans\Locationer\Data\Repositories;

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
