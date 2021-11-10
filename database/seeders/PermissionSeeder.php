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
        
        //User Management Admin
        Permission::create(['name' => 'user-index', 'guard_name' => 'admin']);
        Permission::create(['name' => 'user-section', 'guard_name' => 'admin']);
        Permission::create(['name' => 'user-create', 'guard_name' => 'admin']);
        Permission::create(['name' => 'user-edit', 'guard_name' => 'admin']);
        Permission::create(['name' => 'user-destroy', 'guard_name' => 'admin']);
        Permission::create(['name' => 'user-proxy', 'guard_name' => 'admin']);

        $role = Role::where('name','admin')->first();
        $role->givePermissionTo(Permission::all());
    }
}
