<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Tasks\UpdateCityTask;
use App\Containers\Vendor\Locationer\UI\API\Requests\UpdateCityRequest;
use App\Ship\Parents\Actions\Action;


class UpdateCityAction extends Action
{
    public function run(UpdateCityRequest $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $city = app(UpdateCityTask::class)->run($request->id, $data);

        return $city;
    }
}
