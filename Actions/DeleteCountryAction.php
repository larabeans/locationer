<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\DeleteCountryTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\DeleteCountryRequest;
use App\Ship\Parents\Actions\Action;

class DeleteCountryAction extends Action
{
    public function run(DeleteCountryRequest $request)
    {
        return app(DeleteCountryTask::class)->run($request->id);
    }
}
