<?php

namespace App\Containers\Vendor\Locationer\UI\API\Transformers;

use App\Containers\Vendor\Locationer\Models\Location;
use App\Ship\Parents\Transformers\Transformer;

class LocationTransformer extends Transformer
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
      'country',
      'state',
      'city'
    ];

    /**
     * @param Location $entity
     *
     * @return array
     */
    public function transform(Location $entity)
    {
        $response = [
            'object' => 'Location',
            'id' => $entity->getHashedKey(),
            'address_line_1' => $entity->address_line_1,
            'address_line_2' => $entity->address_line_2,
            'post_code' => $entity->post_code,
            'latitude' => $entity->latitude,
            'longitude' => $entity->longitude,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,
            'country' =>$entity->country,
            'state' =>$entity->state,
            'city' =>$entity->city
        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }

    public function includeCountry(Location $location)
    {
      return $this->item($location->country, new CountryTransformer());
    }

    public function includeState(Location $location)
    {
      return $this->item($location->state, new StateTransformer());
    }

    public function includeCity(Location $location)
    {
      return $this->item($location->city, new CityTransformer());
    }
}
