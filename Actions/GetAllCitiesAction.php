<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\GetAllCitiesTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\GetAllCitiesRequest;
use App\Ship\Parents\Actions\Action;

class GetAllCitiesAction extends Action
{
    public function run(GetAllCitiesRequest $request)
    {
        $cities = app(GetAllCitiesTask::class)->addRequestCriteria()->run();

        return $cities;
    }
}
