<?php

namespace App\Containers\Vendor\Locationer\Tasks;

use App\Containers\Vendor\Locationer\Data\Repositories\LocationRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteLocationTask extends Task
{

    protected $repository;

    public function __construct(LocationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
