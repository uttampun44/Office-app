<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $employees = Employee::with('designation')->get();
     

        return view('employees.index')->with('employees', $employees,);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $roles = Role::all();


        return view('employees.create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $user =  User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);


        Employee::create([
           'name' => $request->input('name'),
           'email' => $request->input('email'),
           'password' => Hash::make($request->input('password')),
           'gender' => $request->input('gender'),
           'number' => $request->input('number'),
           'date_of_birth' => $request->input('date_of_birth'),
           'designation_id' => $request->input('designation'),
           'address' => $request->input('address'),
           'user_id' => $user->id
        ]);

       return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employees = Employee::find($id);

        $roles = Role::all();

        return view('employees.edit')->with([
            'employees' => $employees,
             'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
