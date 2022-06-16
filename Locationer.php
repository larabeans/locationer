<?php

namespace App\Containers\Vendor\Locationer;

use App\Containers\Vendor\Locationer\Tasks\CreateLocationTask;
use Illuminate\Support\Traits\Macroable;

class Locationer
{
    use Macroable;

    public static function getEntity($key)
    {
        return config('locationer.entities.' . $key, false);
    }

    public static function getModel($key)
    {
        if ($entity = self::getEntity($key))
            return $entity['model'];

        return false;
    }

    public static function getTask($key, $type)
    {
        if ($entity = self::getEntity($key)) {
            if ($task = $entity['tasks'][strtolower($type)]) {
                return $task;
            }
        }

        return false;
    }

    public static function getEntities($after = null)
    {
        return config('locationer.entities', []);
    }

    public static function getEntityKeys()
    {
        return array_keys(self::getEntities());
    }

    public static function addEntity($source, $after = null)
    {
        $entities = config('locationer.entities');

        if (!empty($after)) {

            $offset = (array_search($after, self::getEntityKeys())) + 1;

            $last = array_splice($entities, $offset);

            config(['locationer.entities' => array_merge($entities, $source, $last)]);

        } else {
            config(['locationer.entities' => array_merge($entities, $source)]);
        }
    }

    public static function createLocation(
        $locatable_id,
        $locatable_type,
        $address_line_1=null,
        $address_line_2=null,
        $city_id=null,
        $state_id=null,
        $country_id=null,
        $post_code=null,
        $latitude=null,
        $longitude=null
    )
    {
        $model = self::getModel($locatable_type);
        return app(CreateLocationTask::class)->run(
            $model,
            $locatable_id,
            $address_line_1,
            $address_line_2,
            $city_id,
            $state_id,
            $country_id,
            $post_code,
            $latitude,
            $longitude);
    }

}
