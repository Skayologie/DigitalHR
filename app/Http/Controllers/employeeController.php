<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index()
    {
        return view("employee.index", [
            "employee" => User::query()->role("employee")->get()
        ]);
    }
}
