<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB;
class PermissionSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        /* === Create Permission & Roles === */

        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');
        DB::table('permissions')->delete();
        /* === Created Permission === */
        Permission::create(['name' => 'user-section', 'guard_name' => 'web']);
        Permission::create(['name' => 'email-section', 'guard_name' => 'web']);

        $role = Role::where('name','admin')->first();
        $role->givePermissionTo(Permission::all());

        Permission::create(['name' => 'product-actions', 'guard_name' => 'web']);
        $role = Role::where('name','user')->first();
        $role->givePermissionTo(Permission::where('name', 'product-actions')->get());
    }
}
