<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\UpdateLocationTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\UpdateLocationRequest;
use App\Ship\Parents\Actions\Action;

class UpdateLocationAction extends Action
{
    public function run(UpdateLocationRequest $request)
    {
        $data = $request->sanitizeInput([
            "locatable_type",
            "locatable_id",
            "address_line_1",
            "address_line_2",
            "country_id",
            "state_id",
            "city_id",
            "post_code",
            "latitude",
            "longitude"
        ]);

        $location = app(UpdateLocationTask::class)->run($request->id, $data);

        return $location;
    }
}
