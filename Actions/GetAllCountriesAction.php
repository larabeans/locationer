<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\GetAllCountriesTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\GetAllCountriesRequest;
use App\Ship\Parents\Actions\Action;

class GetAllCountriesAction extends Action
{
    public function run(GetAllCountriesRequest $request)
    {
        $countries = app(GetAllCountriesTask::class)->addRequestCriteria()->run();

        return $countries;
    }
}
