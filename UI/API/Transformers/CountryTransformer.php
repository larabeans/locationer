<?php

namespace App\Containers\Vendor\Locationer\UI\API\Transformers;

use App\Containers\Vendor\Locationer\Models\Country;
use App\Containers\Vendor\Locationer\Models\City;
use App\Containers\Vendor\Locationer\Models\Location;
use App\Ship\Parents\Transformers\Transformer;

class CountryTransformer extends Transformer
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
        'states',
        'cities'
    ];

    /**
     * @param Country $entity
     *
     * @return array
     */
    public function transform(Country $entity)
    {
        $response = [
            'object' => 'Country',
            'id' => $entity->getHashedKey(),
            'name' => $entity->name,
            'native' => $entity->native,
            'alpha2' => $entity->alpha2,
            'alpha3' => $entity->alpha3,
            'isd' => $entity->isd,
            'capital' => $entity->capital,
            'currency' => $entity->currency,
            'continent' => $entity->continent,
            'subcontinent' => $entity->subcontinent,
            'emoji' => $entity->emoji,
            'emoji_unicode' => $entity->emoji_unicode,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,
        ];

        $response = $this->ifAdmin([
            'real_id' => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }


    public function includeStates(Country $country)
    {
        return $this->collection($country->states, new StateTransformer());
    }

    public function includeCities(Country $country)
    {
        return $this->collection($country->cities, new CityTransformer());
    }
}
