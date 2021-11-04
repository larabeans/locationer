<?php

/**
 * @apiGroup           Country
 * @apiName            updateCountry
 *
 * @api                {PUT} /v1/countries/:id Update Country
 * @apiDescription     Update country
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authorized User, manage-countries, update-country
 *
 * @apiParam           {Integer}  id
 * @apiParam           {String}  name
 * @apiParam           {String}  native
 * @apiParam           {String}  alpha2 string size must be 2 characters
 * @apiParam           {String}  alpha3 string size must be 3 characters
 * @apiParam           {String}  isd
 * @apiParam           {String}  capital
 * @apiParam           {String}  currency
 * @apiParam           {String}  continent
 * @apiParam           {String}  subcontinent
 * @apiParam           {String}  emoji
 * @apiParam           {String}  emoji_unicode
 *
 * @apiUse             CountrySuccessSingleResponse
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\CountryController;
use Illuminate\Support\Facades\Route;


Route::put('countries/{id}', [CountryController::class, 'updateCountry'])
    ->name('api_location_update_country')
    ->middleware(['auth:api']);
