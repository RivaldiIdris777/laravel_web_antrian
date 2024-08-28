<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function AllPermission() {
        $permissions = Permission::all();
        return view('backend.permission.index',compact('permissions'));
    }

    public function AddPermission() {
        return view('backend.permission.add_permission');
    }

    public function StorePermission(Request $request) {
        $role = Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        return redirect()->route('all.permission');
    }

    public function EditPermission($id) {
        $permission = Permission::findOrFail($id);
        return view('backend.permission.edit_permission',compact('permission'));
    }

    public function UpdatePermission(Request $request) {
        $per_id = $request->id;

        Permission::findOrFail($per_id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        return redirect()->route('all.permission');
    }

    public function DeletePermission($id) {
        Permission::findOrFail($id)->delete();

        return redirect()->route('all.permission');
    }



}
