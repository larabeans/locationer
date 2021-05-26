<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Tasks\DeleteCountryTask;
use App\Containers\Vendor\Locationer\UI\API\Requests\DeleteCountryRequest;
use App\Ship\Parents\Actions\Action;


class DeleteCountryAction extends Action
{
    public function run(DeleteCountryRequest $request)
    {
        return app(DeleteCountryTask::class)->run($request->id);
    }
}
