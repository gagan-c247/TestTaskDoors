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

        //Inventory Management Admin
        Permission::create(['name' => 'product-section', 'guard_name' => 'admin']);
        Permission::create(['name' => 'product-index', 'guard_name' => 'admin']);
        Permission::create(['name' => 'product-create', 'guard_name' => 'admin']);
        Permission::create(['name' => 'product-edit', 'guard_name' => 'admin']);
        Permission::create(['name' => 'product-clone', 'guard_name' => 'admin']);
        Permission::create(['name' => 'product-url', 'guard_name' => 'admin']);
        Permission::create(['name' => 'product-destroy', 'guard_name' => 'admin']);
        Permission::create(['name' => 'product-status', 'guard_name' => 'admin']);

        //Category Management
        Permission::create(['name' => 'category-section', 'guard_name' => 'admin']);
        Permission::create(['name' => 'category-index', 'guard_name' => 'admin']);
        Permission::create(['name' => 'category-create', 'guard_name' => 'admin']);

    

        $role = Role::where('name','admin')->first();
        $role->givePermissionTo(Permission::all());

        //Inventory Management User
        // Permission::create(['name' => 'product-section', 'guard_name' => 'web']);
        // Permission::create(['name' => 'product-index', 'guard_name' => 'web']);
        // Permission::create(['name' => 'product-create', 'guard_name' => 'web']);
        // Permission::create(['name' => 'product-edit', 'guard_name' => 'web']);
        // Permission::create(['name' => 'product-clone', 'guard_name' => 'web']);
        // Permission::create(['name' => 'product-url', 'guard_name' => 'web']);
        // Permission::create(['name' => 'product-destroy', 'guard_name' => 'web']);
        // Permission::create(['name' => 'product-status', 'guard_name' => 'web']);
    
        // $role = Role::where('name','user')->first();
        // $role->givePermissionTo(Permission::where('guard_name', 'web')->get());

    }
}
