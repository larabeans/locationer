<?php

/**
 * @apiGroup           Location
 * @apiName            deleteLocation
 *
 * @api                {DELETE} /v1/locations/:id Delete a Location
 * @apiDescription     Delete Location by Id
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, manage-locations, delete-location
 *
 * @apiParam           {String}  id Location id
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 202 OK
 * {
 * "message": "Record Deleted Successfully."
 * }
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::delete('locations/{id}', [Controller::class, 'deleteLocation'])
    ->name('api_location_delete_location')
    ->middleware(['auth:api']);
