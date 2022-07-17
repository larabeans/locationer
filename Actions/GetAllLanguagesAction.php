<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\GetAllLanguagesTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\GetAllLanguagesRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllLanguagesAction extends Action
{
    public function run(GetAllLanguagesRequest $request)
    {
        return app(GetAllLanguagesTask::class)->addRequestCriteria()->run();
    }
}
