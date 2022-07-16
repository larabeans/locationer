<?php

namespace App\Containers\Larabeans\Locationer\Tasks;

use App\Containers\Larabeans\Locationer\Data\Repositories\CityRepository;
use App\Ship\Parents\Tasks\Task;

class CreateCityTask extends Task
{
    protected $repository;

    public function __construct(CityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
        int $id = 0,
        int $countryId,
        int $stateId,
        string $name,
        string $latitude,
        string $longitude
    ) {
        try {
            $data = [
                "country_id"    => $countryId,
                "state_id"      => $stateId,
                "name"          => $name,
                "latitude"      => $latitude,
                "longitude"     => $longitude
            ];

            if ($id) {
                $data["id"] = $id;
            }

            return $this->repository->create($data);
        } catch (Exception $exception) {
            throw new CreateResourceFailedException($exception);
        }
    }
}
