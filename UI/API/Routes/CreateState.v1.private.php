<?php

/**
 * @apiGroup           State
 * @apiName            createState
 *
 * @api                {POST} /v1/states Create State
 * @apiDescription     Add state record to existing country
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, manage-states, create-state
 *
 * @apiParam           {Integer}  country_id
 * @apiParam           {String}  name
 * @apiParam           {String}  code
 *
 * @apiUse             StateSuccessSingleResponse
 */

use App\Containers\Larabeans\Locationer\UI\API\Controllers\StateController;
use Illuminate\Support\Facades\Route;

Route::post('states', [StateController::class, 'createState'])
    ->name('api_location_create_state')
    ->middleware(['auth:api']);
