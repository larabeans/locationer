<?php

/**
 * @apiGroup           State
 * @apiName            deleteState
 *
 * @api                {DELETE} /v1/states/:id Delete State
 * @apiDescription     Deletes existing state record
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id State Id
 *
 * @apiUse             StateSuccessSingleResponse
 */

use App\Containers\App\Containers\Vendor\Locationer\UI\API\Controllers\StateController;
use Illuminate\Support\Facades\Route;


Route::delete('states/{id}', [StateController::class, 'deleteState'])
    ->name('api_location_delete_state')
    ->middleware(['auth:api']);