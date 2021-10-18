<?php

/**
 * @apiGroup           Location
 * @apiName            updateLocation
 *
 * @api                {PUT} /v1/locations/:id Update a location
 * @apiDescription     Update location by id
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, manage-locations, update-locations
 *
 * @apiParam           {String}  id
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

use App\Containers\Vendor\Locationer\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::put('locations/{id}', [Controller::class, 'updateLocation'])
    ->name('api_location_update_location')
    ->middleware(['auth:api']);
