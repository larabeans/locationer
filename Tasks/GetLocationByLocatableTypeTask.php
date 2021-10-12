<?php

namespace App\Containers\Vendor\Locationer\Tasks;

use App\Containers\Vendor\Locationer\Data\Repositories\LocationRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use App\Containers\Vendor\Locationer\Models\Location;

class GetLocationByLocatableTypeTask extends Task
{
    protected LocationRepository $repository;

    public function __construct(LocationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(string $type)
    {
        try {
            $locationType = config('locationer.locatable_types');
            $index = "";

            foreach ($locationType as $key => $value) {
                if ($key == $type) {
                    $index = $value['class_path'];
                }

            }
            if ($index == null) {
                throw new NotFoundException();
            }
            return $this->repository->where('locatable_type', $index)->paginate(10);
        } catch (Exception $exception) {
            throw new NotFoundException($exception);
        }
    }
}
