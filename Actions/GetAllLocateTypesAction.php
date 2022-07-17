<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Models\Location;
use App\Containers\Larabeans\Locationer\Tasks\GetAllLocateTypesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllLocateTypesAction extends Action
{
    public function run(Request $request): array
    {
        return app(GetAllLocateTypesTask::class)->run();
    }
}
