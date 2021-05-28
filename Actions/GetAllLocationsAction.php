<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Tasks\GetAllLocationsTask;
use App\Containers\Vendor\Locationer\UI\API\Requests\GetAllLocationsRequest;
use App\Ship\Parents\Actions\Action;


class GetAllLocationsAction extends Action
{
    public function run(GetAllLocationsRequest $request)
    {
        $locations = app(GetAllLocationsTask::class)->addRequestCriteria()->run();

        return $locations;
    }
}
