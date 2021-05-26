<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Actions;

use App\Containers\App\Containers\Vendor\Locationer\Models\Location;
use App\Containers\App\Containers\Vendor\Locationer\Tasks\CreateLocationTask;
use App\Containers\App\Containers\Vendor\Locationer\UI\API\Requests\CreateLocationRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;



class CreateLocationAction extends Action
{
    public function run(CreateLocationRequest $data) : Location
    {
        $location = app(CreateLocationTask::class)->run($data);

        return $location;
    }
}
