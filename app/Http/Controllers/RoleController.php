<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoleController extends Controller
{
    public function index():View
    {
        $roles = Role::all();

        return view('roles.index')->with('roles', $roles);
    }
}
