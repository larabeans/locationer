<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Tasks;

use App\Containers\App\Containers\Vendor\Locationer\Data\Repositories\CountryRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCountriesTask extends Task
{

    protected $repository;

    public function __construct(CountryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
