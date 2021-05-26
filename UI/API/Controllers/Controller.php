<?php

namespace App\Containers\Vendor\Locationer\UI\API\Controllers;

use App\Containers\Vendor\Locationer\Actions\CreateLocationAction;
use App\Containers\Vendor\Locationer\Actions\DeleteLocationAction;
use App\Containers\Vendor\Locationer\Actions\FindLocationAction;
use App\Containers\Vendor\Locationer\Actions\GetAllLocationsAction;
use App\Containers\Vendor\Locationer\Actions\UpdateLocationAction;
use App\Containers\Vendor\Locationer\UI\API\Requests\CreateLocationRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\DeleteLocationRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\GetAllLocationsRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\FindLocationRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\UpdateLocationRequest;
use App\Containers\Vendor\Locationer\UI\API\Transformers\LocationTransformer;
use App\Ship\Parents\Controllers\ApiController;


/**
 * Class Controller
 *
 * @package App\Containers\Vendor\Locationer\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param GetAllLocationsRequest $request
     * @return array
     */
    public function getAllLocations(GetAllLocationsRequest $request)
    {
      $locations = app(GetAllLocationsAction::class)->run($request);

      return $this->transform($locations, LocationTransformer::class);
    }

    /**
     * @param FindLocationRequest $request
     * @return array
     */
    public function findLocation(FindLocationRequest $request)
    {
        $location = app(FindLocationAction::class)->run($request);

        return $this->transform($location, LocationTransformer::class);
    }

    /**
     * @param CreateLocationRequest $request
     * @return  array
     */
    public function createLocation(CreateLocationRequest $request)
    {
      $location = app(CreateLocationAction::class)->run($request);

      return $this->transform($location, LocationTransformer::class);
    }

    /**
     * @param UpdateLocationRequest $request
     * @return array
     */
    public function updateLocation(UpdateLocationRequest $request)
    {
        $location = app(UpdateLocationAction::class)->run($request);

        return $this->transform($location, LocationTransformer::class);
    }

    /**
     * @param DeleteLocationRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteLocation(DeleteLocationRequest $request)
    {
        app(DeleteLocationAction::class)->run($request);

        return $this->noContent();
    }

}
