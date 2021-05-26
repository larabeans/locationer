<?php

/**
 * @apiGroup           Country
 * @apiName            deleteCountry
 *
 * @api                {DELETE} /v1/countries/:id Delete Country
 * @apiDescription     Deletes existing country record
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id Country Id
 *
 * @apiUse             CountrySuccessSingleResponse
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\CountryController;
use Illuminate\Support\Facades\Route;


Route::delete('countries/{id}', [CountryController::class, 'deleteCountry'])
    ->name('api_location_delete_country')
    ->middleware(['auth:api']);
