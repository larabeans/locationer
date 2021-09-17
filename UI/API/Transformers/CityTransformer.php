<?php

namespace App\Containers\Vendor\Locationer\UI\API\Transformers;

use App\Containers\Vendor\Locationer\Models\City;
use App\Ship\Parents\Transformers\Transformer;

class CityTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param City $entity
     *
     * @return array
     */
    public function transform(City $entity)
    {
        $response = [
            'object' => 'City',
            'id' => $entity->getHashedKey(),
            'name' => $entity->name,
            'latitude' => $entity->latitude,
            'longitude' => $entity->longitude,
            'country_id'=>$entity->country->id,
            'country_name'=>$entity->country->name,
            'state_id'=>$entity->state->id,
            'state_name'=>$entity->state->name,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
