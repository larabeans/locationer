<?php

namespace App\Containers\Vendor\Locationer\UI\API\Controllers;

use App\Containers\Vendor\Locationer\Actions\CreateLanguageAction;
use App\Containers\Vendor\Locationer\Actions\DeleteLanguageAction;
use App\Containers\Vendor\Locationer\Actions\GetAllLanguagesAction;
use App\Containers\Vendor\Locationer\Actions\UpdateLanguageAction;
use App\Containers\Vendor\Locationer\UI\API\Requests\CreateLanguageRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\DeleteLanguageRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\DeleteLocationerRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\GetAllLanguagesRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\GetAllLocationersRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\FindLocationerByIdRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\UpdateLanguageRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\UpdateLocationerRequest;
use App\Containers\Vendor\Locationer\UI\API\Transformers\LanguageTransformer;
use App\Containers\Vendor\Locationer\UI\API\Transformers\LocationerTransformer;
use App\Containers\Vendor\Locationer\Actions\CreateLocationerAction;
use App\Containers\Vendor\Locationer\Actions\FindLocationerByIdAction;
use App\Containers\Vendor\Locationer\Actions\GetAllLocationersAction;
use App\Containers\Vendor\Locationer\Actions\UpdateLocationerAction;
use App\Containers\Vendor\Locationer\Actions\DeleteLocationerAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class LanguageController extends ApiController
{
    public function createLanguage(CreateLanguageRequest $request): JsonResponse
    {
        $language = app(CreateLanguageAction::class)->run($request);
        return $this->created($this->transform($language, LanguageTransformer::class));
    }

    public function findLocationerById(FindLocationerByIdRequest $request): array
    {
        $locationer = app(FindLocationerByIdAction::class)->run($request);
        return $this->transform($locationer, LocationerTransformer::class);
    }

    public function getAllLanguages(GetAllLanguagesRequest $request): array
    {
        $locationers = app(GetAllLanguagesAction::class)->run($request);
        return $this->transform($locationers, LanguageTransformer::class);
    }

    public function updateLanguage(UpdateLanguageRequest $request): array
    {
        $locationer = app(UpdateLanguageAction::class)->run($request);
        return $this->transform($locationer, LanguageTransformer::class);
    }

    public function deleteLanguage(DeleteLanguageRequest $request): JsonResponse
    {
        app(DeleteLanguageAction::class)->run($request);
        return $this->noContent();
    }
}
