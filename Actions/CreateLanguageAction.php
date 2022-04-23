<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Models\Language;
use App\Containers\Vendor\Locationer\Tasks\CreateLanguageTask;
use App\Containers\Vendor\Locationer\UI\API\Requests\CreateLanguageRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateLanguageAction extends Action
{
    public function run(CreateLanguageRequest $request): Language
    {
        return app(CreateLanguageTask::class)->run($request->name,$request->code);
    }
}
