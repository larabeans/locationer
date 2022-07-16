<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\CreateStateTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\CreateStateRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateStateAction extends Action
{
    public function run(CreateStateRequest $request)
    {
        $state = app(CreateStateTask::class)->run(
            0,
            $request->country_id,
            $request->name,
            $request->code
        );

        return $state;
    }
}
