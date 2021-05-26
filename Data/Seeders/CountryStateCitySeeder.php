<?php
namespace App\Containers\Vendor\Locationer\Data\Seeders;


use App\Containers\Vendor\Locationer\Tasks\CreateCityTask;
use App\Containers\Vendor\Locationer\Tasks\CreateCountryTask;
use App\Containers\Vendor\Locationer\Tasks\CreateStateTask;
use App\Ship\Parents\Seeders\Seeder;

class CountryStateCitySeeder extends Seeder
{
    public function run()
    {
        /**
         * -------------------------------------------------------------
         *  SOURCE                      | DB
         * -------------------------------------------------------------
         *  iso2                        | alpha2
         *  iso3                        | alpha3
         *  phone_code                  | isd
         *  region                      | continent
         *  subregion                   | subcontinent
         *                              |
         */

        $countriesRaw = file_get_contents(app_path('Containers/Vendor/Locationer/Data/Source/countries.json'));
        $statesRaw = file_get_contents(app_path('Containers/Vendor/Locationer/Data/Source/states.json'));
        $citiesRaw = file_get_contents(app_path('Containers/Vendor/Locationer/Data/Source/cities.json'));

        $countries = json_decode($countriesRaw, true);
        $states = json_decode($statesRaw, true);
        $cities = json_decode($citiesRaw, true);


        foreach ($countries as $country) {
            $country = (object) $country;
            app(CreateCountryTask::class)->run(
                $country->id ? $country->id : 0,
                $country->name ? $country->name : '',
                $country->iso2 ? $country->iso2 : '',
                $country->iso3 ? $country->iso3 : '',
                $country->phone_code ? $country->phone_code : '',
                $country->capital ? $country->capital : '',
                $country->currency ? $country->currency : '',
                $country->native ? $country->native : '',
                $country->region ? $country->region : '',
                $country->subregion ? $country->subregion : '',
                $country->emoji ? $country->emoji : '',
                $country->emojiU ? $country->emojiU : ''
            );
        }

        foreach ($states as $state) {
            $state = (object) $state;
            app(CreateStateTask::class)->run(
                $state->id ? $state->id : 0,
                $state->country_id ? $state->country_id : '',
                $state->name ? $state->name : '',
                $state->state_code ? $state->state_code : '',
            );
        }

        foreach ($cities as $city) {
            $city = (object) $city;
            app(CreateCityTask::class)->run(
                $city->id ? $city->id : 0,
                $city->country_id ? $city->country_id : '',
                $city->state_id ? $city->state_id : '',
                $city->name ? $city->name : '',
                $city->latitude ? $city->latitude : '',
                $city->longitude ? $city->longitude : '',
            );
        }
    }
}
