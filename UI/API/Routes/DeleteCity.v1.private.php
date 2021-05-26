<?php

/**
 * @apiGroup           City
 * @apiName            deleteCity
 *
 * @api                {DELETE} /v1/cities/:id Delete City
 * @apiDescription     Deletes existing city record
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id City Id
 *
 * @apiUse             CitySuccessSingleResponse
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\CityController;
use Illuminate\Support\Facades\Route;


Route::delete('cities/{id}', [CityController::class, 'deleteCity'])
    ->name('api_location_delete_city')
    ->middleware(['auth:api']);
