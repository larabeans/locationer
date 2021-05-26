<?php

/**
 * @apiGroup           State
 * @apiName            updateState
 *
 * @api                {PUT} /v1/states/:id Update State
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id
 * @apiParam           {String}  country_id
 * @apiParam           {String}  name
 * @apiParam           {String}  code
 *
 * @apiUse             StateSuccessSingleResponse
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\StateController;
use Illuminate\Support\Facades\Route;


Route::put('states/{id}', [StateController::class, 'updateState'])
    ->name('api_location_update_state')
    ->middleware(['auth:api']);
