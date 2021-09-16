<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Tasks\UpdateStateTask;
use App\Containers\Vendor\Locationer\UI\API\Requests\UpdateStateRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;


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
