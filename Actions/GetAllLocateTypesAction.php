<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Models\Location;
use App\Containers\Vendor\Locationer\Tasks\GetAllLocateTypesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllLocateTypesAction extends Action
{
    public function run(Request $request):array
    {
        return app(GetAllLocateTypesTask::class)->run();
    }
}
