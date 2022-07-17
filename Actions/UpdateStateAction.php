<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\UpdateStateTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\UpdateStateRequest;
use App\Ship\Parents\Actions\Action;

class UpdateStateAction extends Action
{
    public function run(UpdateStateRequest $request)
    {
        $data = $request->sanitizeInput([
            "country_id",
            "name",
            "code"
        ]);

        $state = app(UpdateStateTask::class)->run($request->id, $data);

        return $state;
    }
}
