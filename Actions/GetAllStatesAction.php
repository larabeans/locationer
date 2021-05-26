<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Actions;

use App\Containers\App\Containers\Vendor\Locationer\Tasks\GetAllStatesTask;
use App\Containers\App\Containers\Vendor\Locationer\UI\API\Requests\GetAllStatesRequest;
use App\Ship\Parents\Actions\Action;


class GetAllStatesAction extends Action
{
    public function run(GetAllStatesRequest $request)
    {
        $states = app(GetAllStatesTask::class)->addRequestCriteria()->run();

        return $states;
    }
}
