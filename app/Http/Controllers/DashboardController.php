<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\role;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $roles = Role::all();
        $department = Department::all();
        return view('admin.dashboard',["Roles"=>$roles]);
    }
}
