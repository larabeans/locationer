<?php

namespace App\Containers\Vendor\Locationer\Tasks;

use App\Containers\Vendor\Locationer\Data\Repositories\LocationRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Parents\Exceptions\Exception;
use App\Containers\Vendor\Locationer\Models\Location;

class GetLocationByLocatableTypeTask extends Task
{
    protected LocationRepository $repository;

    public function __construct(LocationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(string $id,string $model)
    {
        try {
            return $this->repository->where( [
                'locatable_type'=>$model,
                'locatable_id' => $id
            ])->get();
        } catch (Exception $exception) {
            throw new NotFoundException($exception);
        }
    }
}
