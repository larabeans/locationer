<?php

namespace App\Containers\Larabeans\Locationer\Tasks;

use App\Containers\Larabeans\Locationer\Data\Repositories\LocationRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Parents\Exceptions\Exception;

class GetAllLocateTypesTask extends Task
{
    protected LocationRepository $repository;

    public function __construct(LocationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(): array
    {
        try {

            return locationer()::getEntities();

        } catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
