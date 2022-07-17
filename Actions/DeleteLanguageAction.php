<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\DeleteLanguageTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\DeleteLanguageRequest;
use App\Ship\Parents\Actions\Action;

class DeleteLanguageAction extends Action
{
    public function run(DeleteLanguageRequest $request)
    {
        return app(DeleteLanguageTask::class)->run($request->id);
    }
}
