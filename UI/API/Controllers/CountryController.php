<?php

namespace App\Containers\Vendor\Locationer\UI\API\Controllers;

use App\Containers\Vendor\Locationer\Actions\CreateCountryAction;
use App\Containers\Vendor\Locationer\Actions\DeleteCountryAction;
use App\Containers\Vendor\Locationer\Actions\FindCountryAction;
use App\Containers\Vendor\Locationer\Actions\GetAllCountriesAction;
use App\Containers\Vendor\Locationer\Actions\UpdateCountryAction;
use App\Containers\Vendor\Locationer\UI\API\Requests\CreateCountryRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\DeleteCountryRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\FindCountryRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\GetAllCountriesRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\UpdateCountryRequest;
use App\Containers\Vendor\Locationer\UI\API\Transformers\CountryTransformer;
use App\Ship\Parents\Controllers\ApiController;


/**
 * Class Controller
 *
 * @package App\Containers\Vendor\Locationer\UI\API\Controllers
 */
class CountryController extends ApiController
{
    /**
     * Countries API
     *
     * @param GetAllCountriesRequest $request
     * @return array
     */
    public function getAllCountries(GetAllCountriesRequest $request)
    {
      $countries = app(GetAllCountriesAction::class)->run($request);

      return $this->transform($countries, CountryTransformer::class);
    }

    /**
     * Countries API -> Find country by Id or Name
     *
     * @param FindCountryRequest $request
     * @return array
     */
    public function findCountry(FindCountryRequest $request)
    {
      $country = app(FindCountryAction::class)->run($request);

      return $this->transform($country, CountryTransformer::class);
    }

    /**
     * Countries API
     *
     * @param CreateCountryRequest $request
     * @return  array
     */
    public function createCountry(CreateCountryRequest $request)
    {
      $country = app(CreateCountryAction::class)->run($request);

      return $this->transform($country, CountryTransformer::class);
    }

    /**
     * Countries API
     *
     * @param UpdateCountryRequest $request
     * @return array
     */
    public function updateCountry(UpdateCountryRequest $request)
    {
      $country = app(UpdateCountryAction::class)->run($request);

      return $this->transform($country, CountryTransformer::class);
    }

    /**
     * Countries API
     *
     * @param DeleteCountryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteCountry(DeleteCountryRequest $request)
    {
      app(DeleteCountryAction::class)->run($request);

      return $this->noContent();
    }

}
