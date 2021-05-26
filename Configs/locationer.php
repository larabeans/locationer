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

        'city' => \App\Containers\Vendor\Locationer\Models\City::class,

        'state' => \App\Containers\Vendor\Locationer\Models\State::class,

        'country' => \App\Containers\Vendor\Locationer\Models\Country::class,

        'location' => \App\Containers\Vendor\Locationer\Models\Location::class,

        'mobile_location' => \App\Containers\Vendor\Locationer\Models\MobileLocation::class,
    ],

    'locatable_types' => [
        'user' => 'App\Containers\User\Models\User',
    ]
];
