<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Actions;

use App\Containers\App\Containers\Vendor\Locationer\Tasks\UpdateLocationTask;
use App\Containers\App\Containers\Vendor\Locationer\UI\API\Requests\UpdateLocationRequest;
use App\Ship\Parents\Actions\Action;


class UpdateLocationAction extends Action
{
    public function run(UpdateLocationRequest $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $location = app(UpdateLocationTask::class)->run($request->id, $data);

        return $location;
    }
}
