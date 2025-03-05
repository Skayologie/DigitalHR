<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class managerController extends Controller
{
    public function index()
    {
        return view("managers.index", [
            "managers" => User::query()->role("manager")->get()
        ]);
    }
    public function showEmployees(){
//        dd(Auth::user()->department->id);
        $dapartment_id = optional(Auth::user()->department)->id;
        $AllDepartmentEmployees = User::select("users.*")->where("department_id",$dapartment_id)->get();
        return view('Conge.index',[
            "conge" => $AllDepartmentEmployees
        ]);
    }
}
