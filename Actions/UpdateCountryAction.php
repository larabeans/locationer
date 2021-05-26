<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Actions;

use App\Containers\App\Containers\Vendor\Locationer\Tasks\UpdateCountryTask;
use App\Containers\App\Containers\Vendor\Locationer\UI\API\Requests\UpdateCountryRequest;
use App\Ship\Parents\Actions\Action;


class UpdateCountryAction extends Action
{
    public function run(UpdateCountryRequest $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $country = app(UpdateCountryTask::class)->run($request->id, $data);

        return $country;
    }
}
