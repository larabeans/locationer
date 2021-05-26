<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Actions;

use App\Containers\App\Containers\Vendor\Locationer\Tasks\DeleteCityTask;
use App\Containers\App\Containers\Vendor\Locationer\UI\API\Requests\DeleteCityRequest;
use App\Ship\Parents\Actions\Action;


class DeleteCityAction extends Action
{
    public function run(DeleteCityRequest $request)
    {
        return app(DeleteCityTask::class)->run($request->id);
    }
}
