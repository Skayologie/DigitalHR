<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RhController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\department;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use App\Http\Middleware\isAdmin;
use Spatie\Permission\Models\Permission;
Route::get('/Test', function () {
    return view('Test.test');
});



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth','isAdmin'])->group(function () {


    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::patch('/roles', [RoleController::class, 'update'])->name('roles.update');
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');




    Route::get('/Admin', function () {
        $roles = Role::all();
        $department = Department::all();
        return view('admin.dashboard',["Roles"=>$roles]);
    })->name('Admin');;
    Route::get('/Admin/Dashboard', function () {
        $department = Department::all();
        $roles = Role::all();
        return view('admin.dashboard',["Roles"=>$roles]);
    });

    Route::get('/permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions.index');
    Route::post('/permissions', [PermissionController::class, 'store'])->name('permissions.store');



    route::get("/Admin/Manage/Rh",[RhController::class, 'index'])->name("Admin.Manager.Rh");


    route::get("/Admin/Dashboard",[ProfileController::class, 'index'])->name("Admin/Dashboard");
});





Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post("/logout",function (){Auth::logout();})->name("logout");





});

require __DIR__.'/auth.php';
