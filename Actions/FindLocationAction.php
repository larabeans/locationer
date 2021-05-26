<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Actions;

use App\Containers\App\Containers\Vendor\Locationer\Models\Location;
use App\Containers\App\Containers\Vendor\Locationer\Tasks\FindLocationTask;
use App\Containers\App\Containers\Vendor\Locationer\UI\API\Requests\FindLocationRequest;
use App\Ship\Parents\Actions\Action;


class FindLocationAction extends Action
{
    public function run(FindLocationRequest $request) : Location
    {
        $location = app(FindLocationTask::class)->run($request->id);

        return $location;
    }
}
