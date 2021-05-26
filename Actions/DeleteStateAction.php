<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Actions;

use App\Containers\App\Containers\Vendor\Locationer\Tasks\DeleteStateTask;
use App\Containers\App\Containers\Vendor\Locationer\UI\API\Requests\DeleteStateRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;


class DeleteStateAction extends Action
{
    public function run(DeleteStateRequest $request)
    {
        return app(DeleteStateTask::class)->run($request->id);
    }
}
