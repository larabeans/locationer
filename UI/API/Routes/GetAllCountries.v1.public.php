<?php

/**
 * @apiGroup           Country
 * @apiName            getAllCountries
 *
 * @api                {GET} /v1/countries Get All Countries
 * @apiDescription     Get all countries,query parameters supporting search criteria available here
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authorized User, manage-countries, view-country
 *
 * @apiParam           {String}  filter include columns e.g. id;name
 * @apiParam           {String}  search search columns e.g. name:search-users
 * @apiParam           {String}  orderBy name of column e.g. id
 * @apiParam           {String}  sortedBy asc or desc
 * @apiParam           {Integer}  page page number
 * @apiParam           {String}  include state,city
 * @apiParam           {Integer}  limit records per page
 *
 * @apiUse             GeneralSuccessMultipleResponse
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\CountryController;
use Illuminate\Support\Facades\Route;

Route::get('countries', [CountryController::class, 'getAllCountries'])
    ->name('api_location_get_all_countries')
    ->middleware(['auth:api']);
