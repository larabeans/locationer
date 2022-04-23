<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Models\Language;
use App\Containers\Vendor\Locationer\Tasks\UpdateLanguageTask;
use App\Containers\Vendor\Locationer\UI\API\Requests\UpdateLanguageRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateLanguageAction extends Action
{
    public function run(UpdateLanguageRequest $request): Language
    {
        $data = $request->sanitizeInput([
            'name',
            'code'
        ]);

        return app(UpdateLanguageTask::class)->run($request->id, $data);
    }
}
