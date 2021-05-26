<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Actions;

use App\Containers\App\Containers\Vendor\Locationer\Tasks\FindCityTask;
use App\Containers\App\Containers\Vendor\Locationer\UI\API\Requests\FindCityRequest;
use App\Ship\Parents\Actions\Action;


class FindCityAction extends Action
{
    public function run(FindCityRequest $request)
    {
        $city = app(FindCityTask::class)->run($request->id);

        return $city;
    }
}
