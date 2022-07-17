<?php

/**
 * @apiGroup           Location
 * @apiName            createLocation
 *
 * @api                {POST} /v1/locations Create Location
 * @apiDescription     Creates Location/Address for any locatable entity
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, manage-locations, create-location
 *
 * @apiParam           {String}  locatable_type Type of locatable entity e.g. user
 * @apiParam           {String}  locatable_id UUID of locatable entity
 * @apiParam           {String}  address_line_1
 * @apiParam           {String}  address_line_2
 * @apiParam           {Integer}  country_id
 * @apiParam           {Integer}  state_id
 * @apiParam           {Integer}  city_id
 * @apiParam           {String}  post_code
 * @apiParam           {String}  latitude
 * @apiParam           {String}  longitude
 *
 * @apiUse             LocationSuccessSingleResponse
 */

use App\Containers\Larabeans\Locationer\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('locations', [Controller::class, 'createLocation'])
    ->name('api_location_create_location')
    ->middleware(['auth:api']);
