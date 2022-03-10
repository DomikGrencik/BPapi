<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
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
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'perform_admin_activity']);
        Permission::create(['name' => 'perform_user_activity']);

        Role::create(["name" => "admin"])->givePermissionTo(Permission::all());
        Role::create(["name" => "user"])->givePermissionTo(["perform_user_activity"]);

        User::find(1)->assignRole("admin");
    }
}
