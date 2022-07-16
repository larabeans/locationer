<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\GetAllStatesTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\GetAllStatesRequest;
use App\Ship\Parents\Actions\Action;

class GetAllStatesAction extends Action
{
    public function run(GetAllStatesRequest $request)
    {
        $states = app(GetAllStatesTask::class)->addRequestCriteria()->run();

        return $states;
    }
}
