<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Models\Location;
use App\Containers\Larabeans\Locationer\Tasks\FindLocationTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\FindLocationRequest;
use App\Ship\Parents\Actions\Action;

class FindLocationAction extends Action
{
    public function run(FindLocationRequest $request): Location
    {
        $location = app(FindLocationTask::class)->run($request->id);

        return $location;
    }
}
