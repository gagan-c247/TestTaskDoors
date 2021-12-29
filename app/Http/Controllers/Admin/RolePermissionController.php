<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
class RolePermissionController extends Controller
{
    public function __construct()
    {
       $this->middleware('permission:role-section');
       $this->middleware('permission:role-index', ['only'=>['index']]);   
       $this->middleware('permission:role-create', ['only'=>['create','store']]);
       $this->middleware('permission:role-edit', ['only'=>['edit', 'update']]);
    }

    public function index()
    {
        $roles = Role::with('permissions')->paginate(5);
        return view('dashboard.admin.role.index',compact('roles'));
    }

    public function create(Role $role)
    {
        $allPermission = Permission::where('guard_name','web')->get();
        return view('dashboard.admin.role.create', compact('role','allPermission'));
    }

    public function store(Request $request)
    {
        $role = Role::create(['name' => $request['name'],'guard_name'=>'web']);
        $role->givePermissionTo($request->input('permission'));
        session()->flash('success','Role Inserted Successfully!');
        return redirect()->route('role.index');
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
        $role = Role::find($id);
        // if($request->role != ''){
        //     $role->name = $request->input('role');
        //     $role->save();
        // } 
        $permissions =  DB::table('role_has_permissions')->where('role_id',$id);
        if($permissions != null ){
            $role->syncPermissions([]);
        }
        if($request['permission'] != null ){
            $role->givePermissionTo($request->input('permission'));
        }
        session()->flash('success','Role Updated Successfully!');
        return redirect()->route('role.index');
    }

}
