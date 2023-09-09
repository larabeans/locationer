<?php

namespace App\Containers\Larabeans\Locationer\Data\Seeders;

use App\Containers\AppSection\Authorization\Tasks\CreatePermissionTask;
use App\Ship\Parents\Seeders\Seeder;

class LocationPermissionsSeeder extends Seeder
{
    public function run()
    {
        foreach (array_keys(config('auth.guards')) as $guardName) {
            // Default Location Management Permissions ----------------------------------------------------------
            app(CreatePermissionTask::class)->run('manage-locations', 'Manage Location Permissions.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('list-locations', 'View All Locations Permissions.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('view-location', 'View Location Permissions.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('update-location', 'Edit Location Permission.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('delete-location', 'Delete Location Permissions.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('create-location', 'Create Location Permission.', guardName: $guardName);

            app(CreatePermissionTask::class)->run('manage-countries', 'Manage Country Permissions.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('view-country', 'View Country Permissions.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('update-country', 'Edit Country Permission.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('delete-country', 'Delete Country Permissions.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('create-country', 'Create Country Permission.', guardName: $guardName);

            app(CreatePermissionTask::class)->run('manage-states', 'Manage States Permissions.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('view-state', 'View State Permissions.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('update-state', 'Edit State Permission.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('delete-state', 'Delete State Permissions.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('create-state', 'Create State Permission.', guardName: $guardName);

            app(CreatePermissionTask::class)->run('manage-cities', 'Manage Cities Permissions.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('view-city', 'View City Permissions.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('update-city', 'Edit City Permission.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('delete-city', 'Delete City Permissions.', guardName: $guardName);
            app(CreatePermissionTask::class)->run('create-city', 'Create City Permission.', guardName: $guardName);
        }
        
    }
}
