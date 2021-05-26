<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Tasks;

use App\Containers\App\Containers\Vendor\Locationer\Data\Repositories\LocationRepository;
use App\Containers\App\Containers\Vendor\Locationer\Models\Location;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateLocationTask extends Task
{

    protected $repository;

    public function __construct(LocationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
        string $locatableType = null,
        string $locatableId = null,
        string $addressLine1 = null,
        string $addressLine2 = null,
        int $city = null,
        int $stateId = null,
        int $countryId = null,
        string $postCode = null,
        string $latitude = null,
        string $longitude = null
    ) : Location
    {

        $data = [
            'locatable_type' => $locatableType,
            'locatable_id'    => $locatableId,
            'address_line_1' => $addressLine1,
            'address_line_2' => $addressLine2,
            'city_id'        => $city,
            'state_id'       => $stateId,
            'country_id'     => $countryId,
            'post_code'      => $postCode,
            'latitude'       => $latitude,
            'longitude'      => $longitude
        ];

        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
