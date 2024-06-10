<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoleController extends Controller
{
    public function index():View
    {
        $roles = Role::all();

        return view('roles.index')->with('roles', $roles);
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
    
       Role::create([
        'roles_name' => $request->input('roles')
       ]);

       return redirect()->route('roles.index');
    }

    public function edit(Request $request, $id)
    {
        $permissions = Permission::all();
        
        $roles = Role::find($id);

        // RolePermission::create([
        //   'permission_id' => $request->input('roles_permission'),
        //    'role_id' => $roles->id
        // ]);
        
        return view('roles.edit', compact('permissions', 'roles'));
    }
}
