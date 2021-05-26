<?php

/**
 * @apiGroup           Country
 * @apiName            updateCountry
 *
 * @api                {PUT} /v1/countries/:id Update Country
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id
 * @apiParam           {String}  name
 * @apiParam           {String}  native
 * @apiParam           {String}  alpha2
 * @apiParam           {String}  alpha3
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

use App\Containers\App\Containers\Vendor\Locationer\UI\API\Controllers\CountryController;
use Illuminate\Support\Facades\Route;


Route::put('countries/{id}', [CountryController::class, 'updateCountry'])
    ->name('api_location_update_country')
    ->middleware(['auth:api']);