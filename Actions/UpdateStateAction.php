<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Actions;

use App\Containers\App\Containers\Vendor\Locationer\Tasks\UpdateStateTask;
use App\Containers\App\Containers\Vendor\Locationer\UI\API\Requests\UpdateStateRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;


class UpdateStateAction extends Action
{
    public function run(UpdateStateRequest $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $state = app(UpdateStateTask::class)->run($request->id, $data);

        return $state;
    }
}
