<?php

namespace App\Containers\Larabeans\Locationer\Actions;

use App\Containers\Larabeans\Locationer\Tasks\FindCountryTask;
use App\Containers\Larabeans\Locationer\UI\API\Requests\FindCountryRequest;
use App\Ship\Parents\Actions\Action;

class FindCountryAction extends Action
{
    public function run(FindCountryRequest $request)
    {
        $country = app(FindCountryTask::class)->run($request->id);

        return $country;
    }
}
