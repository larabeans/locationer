<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Actions;

use App\Containers\App\Containers\Vendor\Locationer\Tasks\DeleteLocationTask;
use App\Containers\App\Containers\Vendor\Locationer\UI\API\Requests\DeleteLocationRequest;
use App\Ship\Parents\Actions\Action;


class DeleteLocationAction extends Action
{
    public function run(DeleteLocationRequest $request)
    {
        return app(DeleteLocationTask::class)->run($request->id);
    }
}
