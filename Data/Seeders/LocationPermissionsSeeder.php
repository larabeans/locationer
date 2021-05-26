<?php

namespace App\Containers\App\Containers\Vendor\Locationer\Data\Seeders;


use App\Containers\AppSection\Authorization\Tasks\CreatePermissionTask;
use App\Ship\Parents\Seeders\Seeder;

class LocationPermissionsSeeder extends Seeder
{
    public function run()
    {
      // Default Location Management Permissions ----------------------------------------------------------
      app(CreatePermissionTask::class)->run('manage-locations', 'Manage Location Permissions.');
      app(CreatePermissionTask::class)->run('list-locations', 'View All Locations Permissions.');
      app(CreatePermissionTask::class)->run('view-location', 'View Location Permissions.');
      app(CreatePermissionTask::class)->run('update-location', 'Edit Location Permission.');
      app(CreatePermissionTask::class)->run('delete-location', 'Delete Location Permissions.');
      app(CreatePermissionTask::class)->run('create-location', 'Create Location Permission.');

      app(CreatePermissionTask::class)->run('manage-countries', 'Manage Country Permissions.');
      app(CreatePermissionTask::class)->run('view-country', 'View Country Permissions.');
      app(CreatePermissionTask::class)->run('update-country', 'Edit Country Permission.');
      app(CreatePermissionTask::class)->run('delete-country', 'Delete Country Permissions.');
      app(CreatePermissionTask::class)->run('create-country', 'Create Country Permission.');

      app(CreatePermissionTask::class)->run('manage-states', 'Manage States Permissions.');
      app(CreatePermissionTask::class)->run('view-state', 'View State Permissions.');
      app(CreatePermissionTask::class)->run('update-state', 'Edit State Permission.');
      app(CreatePermissionTask::class)->run('delete-state', 'Delete State Permissions.');
      app(CreatePermissionTask::class)->run('create-state', 'Create State Permission.');

      app(CreatePermissionTask::class)->run('manage-cities', 'Manage Cities Permissions.');
      app(CreatePermissionTask::class)->run('view-city', 'View City Permissions.');
      app(CreatePermissionTask::class)->run('update-city', 'Edit City Permission.');
      app(CreatePermissionTask::class)->run('delete-city', 'Delete City Permissions.');
      app(CreatePermissionTask::class)->run('create-city', 'Create City Permission.');
    }
}
