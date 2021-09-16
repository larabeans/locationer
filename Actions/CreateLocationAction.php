<?php

namespace App\Containers\Vendor\Locationer\Actions;

use App\Containers\Vendor\Locationer\Models\Location;
use App\Containers\Vendor\Locationer\Tasks\CreateLocationTask;
use App\Containers\Vendor\Locationer\UI\API\Requests\CreateLocationRequest;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;



class CreateLocationAction extends Action
{
    public function run(CreateLocationRequest $data) : Location
    {        
        $location = app(CreateLocationTask::class)->run(
        $data->locatable_type,
        $data->locatable_id ,
        $data->address_line_1 ,
        $data->address_line_2 ,
        $data->city_id ,
        $data->state_id ,
        $data->country_id ,
        $data->post_code ,
        $data->latitude ,
        $data->longitude 
    );

        return $location;
    }
}
