<?php

namespace App\Containers\Larabeans\Locationer\Providers;

use App\Containers\Larabeans\Locationer\Locationer;
use App\Ship\Parents\Providers\MainServiceProvider as ParentMainServiceProvider;

/**
 * Class MainServiceProvider.
 *
 * The Main Service Provider of this container, it will be automatically registered in the framework.
 */
class MainServiceProvider extends ParentMainServiceProvider
{
    /**
     * Container Service Providers.
     *
     * @var array
     */
    public $serviceProviders = [
        LocationerServiceProvider::class
    ];

    /**
     * Container Aliases
     *
     * @var  array
     */
    public $aliases = [
        // 'Foo' => Bar::class,
    ];

    /**
     * Register anything in the container.
     */
    public function register(): void
    {
        parent::register();
        // $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        // ...
    }
}
