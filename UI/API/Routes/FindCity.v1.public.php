<?php

/**
 * @apiGroup           City
 * @apiName            findCity
 *
 * @api                {GET} /v1/cities/:id Find City
 * @apiDescription     Find City BY Id
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, manage-cities, view-city
 *
 * @apiParam           {Integer}  id City Id
 *
 * @apiUse             CitySuccessSingleResponse
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\CityController;
use Illuminate\Support\Facades\Route;

Route::get('cities/{id}', [CityController::class, 'findCity'])
    ->name('api_location_find_city')
    ->middleware(['auth:api']);
