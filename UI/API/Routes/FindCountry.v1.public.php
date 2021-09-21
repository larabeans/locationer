<?php

/**
 * @apiGroup           Country
 * @apiName            findCountry
 *
 * @api                {GET} /v1/countries/:id Find Country
 * @apiDescription     Find country by Id
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authorized User, manage-countries, view-country
 *
 * @apiParam           {Integer}  id Country Id
 *
 * @apiUse             CountrySuccessSingleResponse
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\CountryController;
use Illuminate\Support\Facades\Route;


Route::get('countries/{id}', [CountryController::class, 'findCountry'])
    ->name('api_location_find_country')
    ->middleware(['auth:api']);
