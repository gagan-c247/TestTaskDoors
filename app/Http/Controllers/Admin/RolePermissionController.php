<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
class RolePermissionController extends Controller
{
    public function index()
    {
        $roles = Role::with('permissions')->paginate(5);
        return view('dashboard.admin.role.index',compact('roles'));
    }

    public function create()
    {
        return view('dashboard.admin.role.create');
    }


    public function edit($id)
    {
        $role = Role::with('permissions')->find($id);
        $allPermission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")
        ->where("role_has_permissions.role_id",$id)
        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
        ->all();
        
        if($role == ''){
            return view('error.404');
        }
        return view('dashboard.admin.role.create', compact('role','allPermission','rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        // return $request;
        $role = Role::find($id);
        if($request->role != ''){
            $role->name = $request->input('role');
            $role->save();
        } 
        DB::table('role_has_permissions')->where('role_id',$id)->delete();
        $role->givePermissionTo($request->input('permission'));
        session()->flash('success','Role Updated Successfully!');
        return redirect()->route('role.index');
    }

}
