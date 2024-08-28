<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RoleHasPermissionController extends Controller
{
    public function AllRolePermission() {
        $roles = Role::all();
        return view('backend.rolehaspermission.index',compact('roles'));
    }

    public function AddRolesPermission() {
        $roles = Role::all();
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('backend.rolehaspermission.add_rolepermission',compact('roles', 'permissions','permission_groups'));
    }

    public function StoreRolesPermission(Request $request) {

        $data = array();
        $permissions = $request->permission;

        foreach($permissions as $key => $item) {
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;

            DB::table('role_has_permissions')->insert($data);
        }

        return redirect()->route('all.rolepermission');
    }

    public function EditRolesPermission($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('backend.rolehaspermission.edit_rolepermission',compact('role', 'permissions','permission_groups'));
    }

    public function UpdateRolePermission(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $permissions = $request->permission;

        if (!empty($permissions)) {
            // Fetch permission names by IDs
            $permissionNames = Permission::whereIn('id', $permissions)->pluck('name')->toArray();
            $role->syncPermissions($permissionNames);
        } else {
            // If no permissions are provided, remove all permissions from the role
            $role->syncPermissions([]);
        }

        return redirect()->route('all.rolepermission');
    }






}
