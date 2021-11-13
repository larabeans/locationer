<?php

namespace App\Containers\Vendor\Locationer\Tasks;

use App\Containers\Vendor\Locationer\Data\Repositories\LocationRepository;
use App\Ship\Parents\Tasks\Task;

class UpdateLocationTask extends Task
{
    protected $repository;

    public function __construct(LocationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        } catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
