<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\DeleteStateTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\DeleteStateRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteStateAction extends Action
{
    public function run(DeleteStateRequest $request)
    {
        return app(DeleteStateTask::class)->run($request->id);
    }
}
