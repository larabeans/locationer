<?php

/**
 * @apiGroup           Location
 * @apiName            getLocationByLocatableType
 *
 * @api                {GET} /v1/locations/locatable/:id Get Location By Locateable Type
 * @apiDescription     Return all the Locatable Type Records
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, manage-locations, view-locations
 *
 * @apiParam            {String} id locatable_id
 * @apiParam           {String}  type user,store
 *
 * @apiUse             GeneralSuccessMultipleResponse
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('locations/locatable/{id}', [Controller::class, 'getLocationByLocatableType'])
    ->name('api_locationer_get_location_by_locatable_type')
    ->middleware(['auth:api']);
