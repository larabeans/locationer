<?php

/**
 * @apiGroup           Location
 * @apiName            deleteLocation
 *
 * @api                {DELETE} /v1/locations/:id Delete a Location
 * @apiDescription     Delete Location by Id
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id Location id
 *
 * @apiUse             LocationSuccessSingleResponse
 */

use App\Containers\App\Containers\Vendor\Locationer\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::delete('locations/{id}', [Controller::class, 'deleteLocation'])
    ->name('api_location_delete_location')
    ->middleware(['auth:api']);
