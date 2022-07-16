<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\FindStateTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\FindStateRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindStateAction extends Action
{
    public function run(FindStateRequest $request)
    {
        $state = app(FindStateTask::class)->run($request->id);

        return $state;
    }
}
