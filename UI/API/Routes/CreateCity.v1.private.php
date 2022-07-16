<?php

/**
 * @apiGroup           City
 * @apiName            createCity
 *
 * @api                {POST} /v1/cities Create New City
 * @apiDescription     Adds city to existing state and country
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticate User, manage-cities, create-city
 *
 * @apiParam           {Integer}  country_id
 * @apiParam           {Integer}  state_id
 * @apiParam           {String}  name
 * @apiParam           {String}  latitude
 * @apiParam           {String}  longitude
 *
 * @apiUse             CitySuccessSingleResponse
 */

use App\Containers\Larabeans\Locationer\UI\API\Controllers\CityController;
use Illuminate\Support\Facades\Route;

Route::post('cities', [CityController::class, 'createCity'])
    ->name('api_location_create_city')
    ->middleware(['auth:api']);
