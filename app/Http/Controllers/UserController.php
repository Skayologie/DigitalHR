<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        $department = Department::all();
        $roles = Role::all();
        return view("users.index",
        [
            "users"=>User::all(),
            "Roles"=>$roles,
            "departments"=>$department
        ]
        );
    }
}
