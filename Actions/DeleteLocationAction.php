<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\DeleteLocationTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\DeleteLocationRequest;
use App\Ship\Parents\Actions\Action;

class DeleteLocationAction extends Action
{
    public function run(DeleteLocationRequest $request)
    {
        return app(DeleteLocationTask::class)->run($request->id);
    }
}
