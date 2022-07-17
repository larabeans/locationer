<?php

/**
 * @apiGroup           Language
 * @apiName            getAllLanguages
 *
 * @api                {GET} /v1/languages Get AllL anguages
 * @apiDescription     It show all the languages
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\Larabeans\Locationer\UI\API\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('languages', [LanguageController::class, 'getAllLanguages'])
    ->name('api_locationer_get_all_languages')
    ->middleware(['auth:api']);

