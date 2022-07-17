<?php

/**
 * @apiGroup           Language
 * @apiName            deleteLanguage
 *
 * @api                {DELETE} /v1/language/:id Delete Language
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, Admin
 *
 * @apiParam           {String}  id  id of language
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\Larabeans\Locationer\UI\API\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::delete('language/{id}', [LanguageController::class, 'deleteLanguage'])
    ->name('api_locationer_delete_language')
    ->middleware(['auth:api']);

