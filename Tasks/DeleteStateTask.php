<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Tasks;

use App\Containers\App\Containers\Vendor\Locationer\Data\Repositories\StateRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteStateTask extends Task
{

    protected $repository;

    public function __construct(StateRepository $repository)
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
