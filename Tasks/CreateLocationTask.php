<?php

namespace App\Containers\Vendor\Locationer\Tasks;

use App\Containers\Vendor\Locationer\Data\Repositories\LocationRepository;
use App\Containers\Vendor\Locationer\Models\Location;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use phpDocumentor\Reflection\Types\String_;

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
        string $longitude = null,
        string $tenant_id = null
    ): Location
    {

        $configData = config('locationer.locatable_types');
        $type=null;
        foreach ($configData as $key=>$value) {
            if($key==$locatableType)
            {
                $type =$value['class_path'];
            }
        }
        if($type== null)
        {
            throw new NotFoundException("Locatable_type not found");
        }
        $data = [
            'locatable_type' => $type,
            'locatable_id' => $locatableId,
            'address_line_1' => $addressLine1,
            'address_line_2' => $addressLine2,
            'city_id' => $city,
            'state_id' => $stateId,
            'country_id' => $countryId,
            'post_code' => $postCode,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'tenant_id' => $tenant_id
        ];

        try {
            return $this->repository->create($data);
        } catch (Exception $exception) {
            throw new CreateResourceFailedException($exception);
        }
    }
}
