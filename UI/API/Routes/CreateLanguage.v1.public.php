<?php

/**
 * @apiGroup           Language
 * @apiName            createLanguage
 *
 * @api                {POST} /v1/langauge Create Language
 * @apiDescription     It create new language
 *
 * @apiVersion         1.0.0
 * @apiPermission      Admin
 *
 * @apiParam           {String}  name name of language
 * @apiParam           {String}  code  PK for Pakistan
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\Larabeans\Locationer\UI\API\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::post('langauge', [LanguageController::class, 'createLanguage'])
    ->name('api_locationer_create_language')
    ->middleware(['auth:api']);

