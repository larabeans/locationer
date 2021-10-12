<?php

namespace App\Containers\Vendor\Locationer\Tasks;

use App\Containers\Vendor\Locationer\Data\Repositories\LocationRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class GetAllLocateTypesTask extends Task
{
    protected LocationRepository $repository;

    public function __construct(LocationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(): array
    {
        try {
            $var = config("locationer.locatable_types");
            $data = [];
            foreach ($var as $key => $value) {
                $a = [];
                $a['identifier'] = $value['identifier'];
                $a['display_name'] = $value['display_name'];
                $data[$key] = $a;
            }
            return $data;
            //dd($data);
            //return $this->repository->get();
        } catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
