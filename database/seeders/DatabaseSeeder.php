<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User ;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(1)->create();

         $this->call([
            PermissionsSeeder::class,
            RolesSeeder::class,
         ]);

         $user = User::find(1) ;

         $user->givePermissionTo('users.*');
         $user->givePermissionTo('users.list');
         $user->givePermissionTo('tps.list');
         $user->givePermissionTo('tps.validate');
         $user->assignRole('Super Admin');
    }
}
