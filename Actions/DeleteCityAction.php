<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\DeleteCityTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\DeleteCityRequest;
use App\Ship\Parents\Actions\Action;

class DeleteCityAction extends Action
{
    public function run(DeleteCityRequest $request)
    {
        return app(DeleteCityTask::class)->run($request->id);
    }
}
