<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Tasks;

use App\Containers\App\Containers\Vendor\Locationer\Data\Repositories\StateRepository;
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
        return $this->repository->paginate();
    }
}
