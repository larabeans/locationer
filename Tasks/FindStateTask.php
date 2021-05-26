<?php

namespace App\Containers\Vendor\Locationer\Tasks;

use App\Containers\Vendor\Locationer\Data\Repositories\StateRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Str;

class FindStateTask extends Task
{

    protected $repository;

    public function __construct(StateRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($stateNameOrId)
    {
        try {
            $query = is_numeric($stateNameOrId) ? ['id' => $stateNameOrId] : (Str::isUuid($stateNameOrId) ? ['id' => $stateNameOrId] : ['name' => $stateNameOrId]);

            return $this->repository->findWhere($query)->first();
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
