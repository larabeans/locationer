<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Models\Location;
use App\Containers\Vendor\Locationer\Tasks\GetLocationByLocatableTypeTask;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetLocationByLocatableTypeAction extends Action
{
    public function run(Request $request)
    {
        $model = locationer()::getModel($request->type);
        if ($model == null) {
            throw new NotFoundException("The Requested Type not Found");
        }
        return app(GetLocationByLocatableTypeTask::class)->run($request->id,$model);
    }
}
