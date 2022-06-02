<?php

namespace App\Containers\Vendor\Locationer\UI\API\Transformers;

use App\Containers\Vendor\Locationer\Models\Location;
use App\Containers\Vendor\Locationer\Models\State;
use App\Ship\Parents\Transformers\Transformer;

class StateTransformer extends Transformer
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
        'cities',
        'country'
    ];

    /**
     * @param State $entity
     *
     * @return array
     */
    public function transform(State $entity)
    {
        $response = [
            'object' => 'State',
            'id' => $entity->getHashedKey(),
            'country_id' => $entity->country_id,
            'name' => $entity->name,
            'code' => $entity->code,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id' => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }

    public function includeCities(State $state)
    {
        return $this->collection($state->cities, new CityTransformer());
    }
}
