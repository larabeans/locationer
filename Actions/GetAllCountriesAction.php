<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Tasks\GetAllCountriesTask;
use App\Containers\Vendor\Locationer\UI\API\Requests\GetAllCountriesRequest;
use App\Ship\Parents\Actions\Action;


class GetAllCountriesAction extends Action
{
    public function run(GetAllCountriesRequest $request)
    {
        $countries = app(GetAllCountriesTask::class)->addRequestCriteria()->run();

        return $countries;
    }
}
