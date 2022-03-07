<?php

use App\Containers\Vendor\Locationer\Locationer;

if (!function_exists('locationer')) {
    /** @return Locationer */
    function locationer()
    {
        return app(Locationer::class);
    }
}
