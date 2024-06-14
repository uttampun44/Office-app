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

    public function edit($id)
    {
        $roles = Role::find($id);
        $permissions = Permission::all();
        
        return view('roles.edit')->with(
            [
            'permissions' => $permissions,
             'roles' => $roles
            ]
            );
    }

    public function update(Request $request, $id)
    {
           $roles= Role::find($id);

           RolePermission::create([
            'permission_id' => $request->input('permission_id'),
            'role_id' => $roles->id
           ]);

           return redirect()->route('roles.index');
    }
}
