<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class managerController extends Controller
{
    public function index()
    {
        return view("managers.index", [
            "managers" => User::query()->role("manager")->get()
        ]);
    }
}
