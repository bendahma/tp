<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Users Permissions
        Permission::create(['name'=>'users.*']);
        Permission::create(['name'=>'users.list']);
        Permission::create(['name'=>'tps.*']);
        Permission::create(['name'=>'tps.list']);
        Permission::create(['name'=>'tps.validate']);

    }
}
