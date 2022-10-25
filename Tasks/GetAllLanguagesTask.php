<?php

namespace App\Containers\Larabeans\Locationer\Tasks;

use App\Containers\Larabeans\Locationer\Data\Repositories\LanguageRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllLanguagesTask extends Task
{
    protected LanguageRepository $repository;

    public function __construct(LanguageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->get();
    }
}
