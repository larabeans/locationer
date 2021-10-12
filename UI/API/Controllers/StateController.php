<?php

namespace App\Containers\Vendor\Locationer\UI\API\Controllers;

use App\Containers\Vendor\Locationer\Actions\CreateStateAction;
use App\Containers\Vendor\Locationer\Actions\DeleteStateAction;
use App\Containers\Vendor\Locationer\Actions\FindStateAction;
use App\Containers\Vendor\Locationer\Actions\GetAllStatesAction;
use App\Containers\Vendor\Locationer\Actions\UpdateStateAction;
use App\Containers\Vendor\Locationer\UI\API\Requests\CreateStateRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\DeleteStateRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\FindStateRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\GetAllStatesRequest;
use App\Containers\Vendor\Locationer\UI\API\Requests\UpdateStateRequest;
use App\Containers\Vendor\Locationer\UI\API\Transformers\StateTransformer;
use App\Ship\Parents\Controllers\ApiController;


/**
 * Class Controller
 *
 * @package App\Containers\Vendor\Locationer\UI\API\Controllers
 */
class StateController extends ApiController
{
    /**
     * States API
     *
     * @param GetAllStatesRequest $request
     * @return array
     */
    public function getAllStates(GetAllStatesRequest $request)
    {
        $states = app(GetAllStatesAction::class)->run($request);

        return $this->transform($states, StateTransformer::class);
    }

    /**
     * States API -> Find state by Id or Name
     *
     * @param FindStateRequest $request
     * @return array
     */
    public function findState(FindStateRequest $request)
    {
        $state = app(FindStateAction::class)->run($request);

        return $this->transform($state, StateTransformer::class);
    }

    /**
     * States API
     *
     * @param CreateStateRequest $request
     * @return  array
     */
    public function createState(CreateStateRequest $request)
    {
        $state = app(CreateStateAction::class)->run($request);

        return $this->transform($state, StateTransformer::class);
    }

    /**
     * States API
     *
     * @param UpdateStateRequest $request
     * @return array
     */
    public function updateState(UpdateStateRequest $request)
    {
        $state = app(UpdateStateAction::class)->run($request);

        return $this->transform($state, StateTransformer::class);
    }

    /**
     * States API
     *
     * @param DeleteStateRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteState(DeleteStateRequest $request)
    {
        app(DeleteStateAction::class)->run($request);

        return $this->noContent();
    }

}
