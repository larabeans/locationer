<?php

/**
 * @apiGroup           Language
 * @apiName            updateLanguage
 *
 * @api                {PATCH} /v1/language/:id Update Language
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, Admin
 *
 * @apiParam           {String}  id
 * @apiParam           {String}  name
 * @apiParam           {String}    code
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::patch('language/{id}', [LanguageController::class, 'updateLanguage'])
    ->name('api_locationer_update_language')
    ->middleware(['auth:api']);

