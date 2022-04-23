<?php

namespace App\Containers\Vendor\Locationer\Tasks;

use App\Containers\Vendor\Locationer\Data\Repositories\LocationRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Parents\Exceptions\Exception;

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
            $var = json_decode($id);
            if (is_array($var)) {
                return $this->repository->whereIn('id', $var)->delete();
            } else {
                return $this->repository->delete($id);
            }
        } catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
