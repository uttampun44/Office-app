<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Employee;
use App\Models\Permission;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('permission:dashboard')->name('dashboard');

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /**********************Roles Routes************************/ 
    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('roles/create', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles/{id}', [RoleController::class, 'edit'])->name('roles.edit');
    Route::post('/roles/edit/{id}', [RoleController::class, 'update'])->name('roles.update');

    /*********************Permissions*****************************/ 
    Route::get('/permission', [PermissionController::class, 'index'])->middleware('permission:permission.index')->name('permission.index');
    Route::get('/permission/create', [PermissionController::class, 'create'])->name('permission.create');
    Route::post('/permission/create', [PermissionController::class, 'store'])->name('permission.store');

    /*********************employees*******************/
    Route::resource('/employees', EmployeeController::class); 
    
});

require __DIR__.'/auth.php';
