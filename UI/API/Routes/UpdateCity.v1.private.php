<?php

/**
 * @apiGroup           City
 * @apiName            updateCity
 *
 * @api                {PUT} /v1/cities/:id Update City
 * @apiDescription     update city
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, manage-cities, update-city
 *
 * @apiParam           {Integer}  id
 * @apiParam           {Integer}  country_id
 * @apiParam           {Integer}  state_id
 * @apiParam           {String}  name
 * @apiParam           {String}  latitude
 * @apiParam           {String}  longitude
 *
 * @apiUse             CitySuccessSingleResponse
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\CityController;
use Illuminate\Support\Facades\Route;

Route::put('cities/{id}', [CityController::class, 'updateCity'])
    ->name('api_location_update_city')
    ->middleware(['auth:api']);
