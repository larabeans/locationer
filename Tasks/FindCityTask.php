<?php

namespace App\Containers\Vendor\Locationer\Tasks;

use Illuminate\Support\Str;
use App\Containers\Vendor\Locationer\Data\Repositories\CityRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindCityTask extends Task
{
    protected $repository;

    public function __construct(CityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($cityNameOrId)
    {
        try {
            $query = is_numeric($cityNameOrId) ? ['id' => $cityNameOrId] : (Str::isUuid($cityNameOrId) ? ['id' => $cityNameOrId] : ['name' => $cityNameOrId]);

            return $this->repository->findWhere($query)->first();
        } catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
