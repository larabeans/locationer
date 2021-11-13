<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Tasks\GetAllCitiesTask;
use App\Containers\Vendor\Locationer\UI\API\Requests\GetAllCitiesRequest;
use App\Ship\Parents\Actions\Action;

class GetAllCitiesAction extends Action
{
    public function run(GetAllCitiesRequest $request)
    {
        $cities = app(GetAllCitiesTask::class)->addRequestCriteria()->run();

        return $cities;
    }
}
