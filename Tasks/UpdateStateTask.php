<?php

namespace App\Containers\Larabeans\Locationer\Tasks;

use App\Containers\Larabeans\Locationer\Data\Repositories\StateRepository;
use App\Ship\Parents\Tasks\Task;

class UpdateStateTask extends Task
{
    protected $repository;

    public function __construct(StateRepository $repository)
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
