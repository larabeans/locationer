<?php

/**
 * @apiGroup           Country
 * @apiName            createCountry
 *
 * @api                {POST} /v1/countries Create Country
 * @apiDescription     Adds country record
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
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


Route::post('countries', [CountryController::class, 'createCountry'])
    ->name('api_location_create_country')
    ->middleware(['auth:api']);