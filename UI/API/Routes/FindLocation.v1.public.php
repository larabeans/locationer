<?php

/**
 * @apiGroup           Location
 * @apiName            findLocation
 *
 * @api                {GET} /v1/locations/:id Find Location
 * @apiDescription     Find location by id
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id Location ID
 *
 * @apiUse             LocationSuccessSingleResponse
 */

use App\Containers\App\Containers\Vendor\Locationer\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::get('locations/{id}', [Controller::class, 'findLocation'])
    ->name('api_location_find_location')
    ->middleware(['auth:api']);
