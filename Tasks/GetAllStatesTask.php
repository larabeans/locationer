<?php

namespace App\Containers\Larabeans\Locationer\Tasks;

use App\Containers\Larabeans\Locationer\Data\Repositories\StateRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllStatesTask extends Task
{
    protected $repository;

    public function __construct(StateRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->get();
    }
}
