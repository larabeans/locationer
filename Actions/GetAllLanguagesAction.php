<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Tasks\GetAllLanguagesTask;
use App\Containers\Vendor\Locationer\UI\API\Requests\GetAllLanguagesRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllLanguagesAction extends Action
{
    public function run(GetAllLanguagesRequest $request)
    {
        return app(GetAllLanguagesTask::class)->addRequestCriteria()->run();
    }
}
