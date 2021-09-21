<?php

/**
 * @apiGroup           State
 * @apiName            findState
 *
 * @api                {GET} /v1/states/:id Find State
 * @apiDescription     Find state by Id
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, manage-states, view-state
 *
 * @apiParam           {Integer}  id State Id
 *
 * @apiUse             StateSuccessSingleResponse
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\StateController;
use Illuminate\Support\Facades\Route;


Route::get('states/{id}', [StateController::class, 'findState'])
    ->name('api_location_find_state')
    ->middleware(['auth:api']);
