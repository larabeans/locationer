<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Tasks\UpdateCountryTask;
use App\Containers\Vendor\Locationer\UI\API\Requests\UpdateCountryRequest;
use App\Ship\Parents\Actions\Action;

class UpdateCountryAction extends Action
{
    public function run(UpdateCountryRequest $request)
    {
        $data = $request->sanitizeInput([
            "name",
            "native",
            "alpha2",
            "alpha3",
            "isd",
            "capital",
            "currency",
            "continent",
            "subcontinent",
            "emoji",
            "emoji_unicode",
        ]);

        $country = app(UpdateCountryTask::class)->run($request->id, $data);

        return $country;
    }
}
