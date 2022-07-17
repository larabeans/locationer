<?php

/**
 * @apiGroup           City
 * @apiName            deleteCity
 *
 * @api                {DELETE} /v1/cities/:id Delete City
 * @apiDescription     Deletes existing city record
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, manage-cities, delete-city
 *
 * @apiParam           {Integer}  id City Id
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 202 OK
 * {
 * "message": "Record Deleted Successfully."
 * }
 *
 */

use App\Containers\Larabeans\Locationer\UI\API\Controllers\CityController;
use Illuminate\Support\Facades\Route;

Route::delete('cities/{id}', [CityController::class, 'deleteCity'])
    ->name('api_location_delete_city')
    ->middleware(['auth:api']);
