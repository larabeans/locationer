<?php

/**
 * @apiGroup           Country
 * @apiName            deleteCountry
 *
 * @api                {DELETE} /v1/countries/:id Delete Country
 * @apiDescription     Deletes existing country record
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authorized User, manage-countries, delete-country
 *
 * @apiParam           {Integer}  id Country Id
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 202 OK
 * {
 * "message": "Record Deleted Successfully."
 * }
 */

use App\Containers\Larabeans\Locationer\UI\API\Controllers\CountryController;
use Illuminate\Support\Facades\Route;

Route::delete('countries/{id}', [CountryController::class, 'deleteCountry'])
    ->name('api_location_delete_country')
    ->middleware(['auth:api']);
