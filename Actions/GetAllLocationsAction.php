<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\GetAllLocationsTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\GetAllLocationsRequest;
use App\Ship\Parents\Actions\Action;

class GetAllLocationsAction extends Action
{
    public function run(GetAllLocationsRequest $request)
    {
        $locations = app(GetAllLocationsTask::class)->addRequestCriteria()->run();

        return $locations;
    }
}
