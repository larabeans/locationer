<?php

namespace App\Containers\Larabeans\Locationer\Data\Seeders;

use App\Containers\Larabeans\Locationer\Tasks\CreateLanguageTask;
use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultLanguagesSeeder extends Seeder
{
    public function run()
    {
        $languages = json_decode(file_get_contents(app_path('Containers/Larabeans/Locationer/Data/Source/languages.json')));

        foreach ($languages as $language) {
            app(CreateLanguageTask::class)->run($language->Name, $language->Code);
        }
    }
}
