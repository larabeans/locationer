<?php

/**
 * @apiGroup           Location
 * @apiName            getAllLocatableTypes
 *
 * @api                {GET} /v1/locatable/location GetAllLocatableTypes
 * @apiDescription     This endpoint return all the locatable type exist.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authorized User, manage-locations, list-locations
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
 * {
 * "type": {
 *       "identifier": "identifier",
 *       "display_name": "display_name"
 *   },
 *  {
 * //...
 *  }
 * //..
 * }
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('locatable/location', [Controller::class, 'getAllLocatableTypes'])
    ->name('api_locationer_get_all_locatable_types')
    ->middleware(['auth:api']);

