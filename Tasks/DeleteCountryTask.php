<?php

namespace App\Containers\Larabeans\Locationer\Tasks;

use App\Containers\Larabeans\Locationer\Data\Repositories\CountryRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Parents\Exceptions\Exception;

class DeleteCountryTask extends Task
{
    protected $repository;

    public function __construct(CountryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        } catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
