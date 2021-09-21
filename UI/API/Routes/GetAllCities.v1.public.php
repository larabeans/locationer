<?php

/**
 * @apiGroup           City
 * @apiName            getAllCities
 *
 * @api                {GET} /v1/cities Get All Cities
 * @apiDescription     Get all cities,query parameters supporting search criteria available here
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, manage-cities, view-city
 *
 * @apiParam           {String}  filter include columns e.g. id;name
 * @apiParam           {String}  search search columns e.g. name:search-users
 * @apiParam           {String}  orderBy name of column e.g. id
 * @apiParam           {String}  sortedBy asc or desc
 * @apiParam           {Integer}  page page number
 * @apiParam           {String}  include country,state
 * @apiParam           {Integer}  limit records per page
 *
 * @apiUse             GeneralSuccessMultipleResponse
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\CityController;
use Illuminate\Support\Facades\Route;


Route::get('cities', [CityController::class, 'getAllCities'])
    ->name('api_location_get_all_cities')
    ->middleware(['auth:api']);
