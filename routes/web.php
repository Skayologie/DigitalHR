<?php

use App\Http\Controllers\CursusController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RhController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Mail\sendWelcomePass;
use App\Models\Cursus;
use App\Models\department;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use App\Http\Middleware\isAdmin;
use Spatie\Permission\Models\Permission;
Route::get('/Test', function () {
    Mail::to("jawadboulmal@gmail.com")->send(new sendWelcomePass());

});



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    $roles = Role::all();
    $department = Department::all();
    return view('admin.dashboard',["Roles"=>$roles]);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth','isAdmin'])->group(function () {
    Route::post('/Admin/User/Create',[UserController::class,'store'])->name("user.store");
    Route::get('/Admin/User/{user}/edit',[UserController::class,'edit'])->name("users.update");
    Route::post('/Admin/User/{user}',[UserController::class,'update'])->name("users.edit");

    Route::post('/Admin/User/Cursus/{id}',[UserController::class,'update'])->name("users.edit");


    Route::get('/Admin/Department',[DepartmentController::class,'index'])->name("departments.index");
    Route::post('/Admin/Department',[DepartmentController::class,'store'])->name("departments.store");
    Route::get('/Admin/Department/{department}/edit',[DepartmentController::class,'edit'])->name("Department.edit");
    Route::post('/Admin/Department/{department}',[DepartmentController::class,'update'])->name("Department.update");

    Route::get('/Admin/Department/{user}', [CursusController::class, 'index'])->name('cursus.index');

    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::patch('/roles', [RoleController::class, 'update'])->name('roles.update');
    Route::post('/roles/Add', [RoleController::class, 'store'])->name('roles.store');
    Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');




    Route::get('/Admin', function () {
        $roles = Role::all();
        $department = Department::all();
        return view('admin.dashboard',[
            "Roles"=>$roles,
            "departments"=>$department
        ]);
    })->name('Admin');

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
