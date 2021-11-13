<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Tasks\CreateCountryTask;
use App\Containers\Vendor\Locationer\UI\API\Requests\CreateCountryRequest;
use App\Ship\Parents\Actions\Action;

class CreateCountryAction extends Action
{
    public function run(CreateCountryRequest $request)
    {
        $country = app(CreateCountryTask::class)->run(
            0,
            $request->name,
            $request->alpha2,
            $request->alpha3,
            $request->isd,
            $request->capital,
            $request->currency,
            $request->native,
            $request->continent,
            $request->subcontinent,
            $request->emoji,
            $request->emoji_unicode
        );

        return $country;
    }
}
