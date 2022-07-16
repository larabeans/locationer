<?php

namespace App\Containers\Larabeans\Locationer\Tasks;

use App\Containers\Larabeans\Locationer\Data\Repositories\StateRepository;
use App\Ship\Parents\Tasks\Task;

class CreateStateTask extends Task
{
    protected $repository;

    public function __construct(StateRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
        int $id = 0,
        int $countryId,
        string $name,
        string $code
    ) {
        try {
            $data = [
                "country_id" => $countryId,
                "name" => $name,
                "code" => $code
            ];

            if ($id) {
                $data["id"] = $id;
            }

            return $this->repository->create($data);
        } catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
