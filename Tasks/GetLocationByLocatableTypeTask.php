<?php

namespace App\Containers\Larabeans\Locationer\Tasks;

use App\Containers\Larabeans\Locationer\Data\Repositories\LocationRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Parents\Exceptions\Exception;
use App\Containers\Larabeans\Locationer\Models\Location;

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
