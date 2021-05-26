<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Tasks;

use App\Containers\App\Containers\Vendor\Locationer\Data\Repositories\CityRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class GetStateCitiesTask extends Task
{

    protected $repository;

    public function __construct(CityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}