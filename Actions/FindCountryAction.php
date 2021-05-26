<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Actions;

use App\Containers\App\Containers\Vendor\Locationer\Tasks\FindCountryTask;
use App\Containers\App\Containers\Vendor\Locationer\UI\API\Requests\FindCountryRequest;
use App\Ship\Parents\Actions\Action;


class FindCountryAction extends Action
{
    public function run(FindCountryRequest $request)
    {
        $country = app(FindCountryTask::class)->run($request->id);

        return $country;
    }
}
