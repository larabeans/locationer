<?php

namespace App\Containers\Vendor\Locationer\Tasks;

use App\Containers\Vendor\Locationer\Data\Repositories\LanguageRepository;
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
        return $this->repository->paginate();
    }
}
