<?php

namespace App\Containers\Larabeans\Locationer\Tasks;

use App\Containers\Larabeans\Locationer\Data\Repositories\LocationRepository;
use App\Containers\Larabeans\Locationer\Models\Location;
use App\Ship\Parents\Tasks\Task;

class CreateLocationTask extends Task
{
    protected $repository;

    public function __construct(LocationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
        string $locatableTypeIdentifier = null,
        string $locatableId   = null,
        string $addressLine1  = null,
        string $addressLine2  = null,
        int $cityId           = null,
        int $stateId          = null,
        int $countryId        = null,
        string $postCode      = null,
        string $latitude      = null,
        string $longitude     = null,
        string $tenantId      = null
    ): Location {

        $data = [
            'locatable_type' => $locatableTypeIdentifier,
            'locatable_id'   => $locatableId,
            'city_id'        => $cityId,
            'state_id'       => $stateId,
            'country_id'     => $countryId,
            'address_line_1' => $addressLine1,
            'address_line_2' => $addressLine2,
            'post_code'      => $postCode,
            'latitude'       => $latitude,
            'longitude'      => $longitude,
            'tenant_id'      => $tenantId
        ];

        try {
            return $this->repository->create($data);
        } catch (Exception $exception) {
            throw new CreateResourceFailedException($exception);
        }
    }
}
