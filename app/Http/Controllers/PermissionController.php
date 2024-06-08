<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PermissionController extends Controller
{
    public function index():View
    {
        $permissions = Permission::all();

        return view('permissions.index')->with('permissions', $permissions);
    }

    public function create():View
    {
       return view('permissions.create');
    }

    public function store(Request $request)
    {
        Permission::create([
          'permission_name' => $request->input('permission')
        ]);
        
        return redirect()->route('permission.index');
    }
}
