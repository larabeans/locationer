<?php

namespace App\Containers\Vendor\Locationer\Tasks;

use App\Containers\Vendor\Locationer\Data\Repositories\LocationRepository;
use App\Containers\Vendor\Locationer\Models\Location;
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
        $locatableTypes = config('locationer.locatable_types');
        $locatableType = null;

        foreach ($locatableTypes as $key => $value) {
            if ($key == $locatableTypeIdentifier) {
                $locatableType = $value['class_path'];
            }
        }

        if ($locatableType== null) {
            throw new NotFoundException("Locatable_type not found");
        }

        $data = [
            'locatable_type' => $locatableType,
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
