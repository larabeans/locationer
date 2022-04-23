<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Tasks\DeleteLanguageTask;
use App\Containers\Vendor\Locationer\UI\API\Requests\DeleteLanguageRequest;
use App\Ship\Parents\Actions\Action;

class DeleteLanguageAction extends Action
{
    public function run(DeleteLanguageRequest $request)
    {
        return app(DeleteLanguageTask::class)->run($request->id);
    }
}
