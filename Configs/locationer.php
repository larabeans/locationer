<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Location Container
    |--------------------------------------------------------------------------
    |
    |
    |
    */
    'installed' => true,

    'enabled' => true,

    'models' => [

        'city' => \App\Containers\Larabeans\Locationer\Models\City::class,

        'state' => \App\Containers\Larabeans\Locationer\Models\State::class,

        'country' => \App\Containers\Larabeans\Locationer\Models\Country::class,

        'location' => \App\Containers\Larabeans\Locationer\Models\Location::class,

        'mobile_location' => \App\Containers\Larabeans\Locationer\Models\MobileLocation::class,
    ],

    'entities' => [
        'dummy' => [
            'identifier' => 'dummy',
            'key' => 'dummy',
            'name' => 'Dummy',
            'model' => \App\Containers\Larabeans\Dummy\Models\Dummy::class,
        ],
    ]
];
