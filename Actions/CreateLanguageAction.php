<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Models\Language;
use App\Containers\Larabeans\Locationer\Tasks\CreateLanguageTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\CreateLanguageRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateLanguageAction extends Action
{
    public function run(CreateLanguageRequest $request): Language
    {
        return app(CreateLanguageTask::class)->run($request->name,$request->code);
    }
}
