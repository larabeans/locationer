<?php

namespace App\Containers\Larabeans\Locationer\UI\API\Transformers;

use App\Containers\Larabeans\Locationer\Models\City;
use App\Ship\Parents\Transformers\Transformer;

class CityTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected array $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected array $availableIncludes = [
        'country',
        'states'
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
            'country_id' => $entity->country->id,
            'country_name' => $entity->country->name,
            'state_id' => $entity->state->id,
            'state_name' => $entity->state->name,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id' => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }

    public function includeCountry(City $city)
    {
        return $this->item($city->country, new CountryTransformer());
    }

    public function includeStates(City $city)
    {
        return $this->item($city->state, new StateTransformer());
    }
}
