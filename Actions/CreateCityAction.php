<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Tasks\CreateCityTask;
use App\Containers\Vendor\Locationer\UI\API\Requests\CreateCityRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;


class CreateCityAction extends Action
{
    public function run(CreateCityRequest $request)
    {
        $city = app(CreateCityTask::class)->run(
            0,
            $request->country_id,
            $request->state_id,
            $request->name,
            $request->latitude,
            $request->longitude
        );

        return $city;
    }
}
