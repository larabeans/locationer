<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\FindCityTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\FindCityRequest;
use App\Ship\Parents\Actions\Action;

class FindCityAction extends Action
{
    public function run(FindCityRequest $request)
    {
        $city = app(FindCityTask::class)->run($request->id);

        return $city;
    }
}
