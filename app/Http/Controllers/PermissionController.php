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
}
