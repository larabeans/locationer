<?php

namespace App\Containers\Vendor\Locationer\UI\API\Controllers;

use App\Containers\Vendor\Locationer\Actions\CreateCityAction;
use App\Containers\Vendor\Locationer\Actions\DeleteCityAction;
use App\Containers\Vendor\Locationer\Actions\FindCityAction;
use App\Containers\Vendor\Locationer\Actions\GetAllCitiesAction;
use App\Containers\Vendor\Locationer\Actions\UpdateCityAction;
use App\Containers\Vendor\Locationer\UI\API\Requests\CreateCityRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\DeleteCityRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\FindCityRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\GetAllCitiesRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\UpdateCityRequest;
use App\Containers\Vendor\Locationer\UI\API\Transformers\CityTransformer;
use App\Ship\Parents\Controllers\ApiController;


/**
 * Class Controller
 *
 * @package App\Containers\Vendor\Locationer\UI\API\Controllers
 */
class CityController extends ApiController
{
    /**
     * Cities API > Get All Cities
     *
     * @param GetAllCitiesRequest $request
     * @return  array
     */
    public function getAllCities(GetAllCitiesRequest $request)
    {
      $cities = app(GetAllCitiesAction::class)->run($request);

      return $this->transform($cities, CityTransformer::class);
    }

    /**
     * Cities API > Find city by Id or Name
     *
     * @param FindCityRequest $request
     * @return array
     */
    public function findCity(FindCityRequest $request)
    {
      $city = app(FindCityAction::class)->run($request);

      return $this->transform($city, CityTransformer::class);
    }

    /**
     * Cities API > Create city
     *
     * @param CreateCityRequest $request
     * @return  array
     */
    public function createCity(CreateCityRequest $request)
    {
      $city = app(CreateCityAction::class)->run($request);

      return $this->transform($city, CityTransformer::class);
    }

    /**
     * Cities API > Update city
     *
     * @param UpdateCityRequest $request
     * @return  array
     */
    public function updateCity(UpdateCityRequest $request)
    {
      $city = app(UpdateCityAction::class)->run($request);

      return $this->transform($city, CityTransformer::class);
    }

    /**
     * Cities API > Delete city
     *
     * @param DeleteCityRequest $request
     * @return  array
     */
    public function deleteCity(DeleteCityRequest $request)
    {
      $city = app(DeleteCityAction::class)->run($request);

      return $this->noContent(); //$this->transform($city, CityTransformer::class);
    }

}
