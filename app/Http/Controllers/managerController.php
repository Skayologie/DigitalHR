<?php

namespace App\Http\Controllers;

use App\Models\Conge;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $AllDepartmentEmployees = DB::table('conge')
            ->join("users","conge.user_id","=","users.id")
            ->select("*")
            ->get();
//        $AllDepartmentEmployees = User::select("users.*")->where("department_id",$dapartment_id)->get();
        return view('Conge.index',[
            "conge" => $AllDepartmentEmployees
        ]);
    }

    public function showConge(){
        $dapartment_id = optional(Auth::user()->department)->id;
        $AllDepartmentEmployees = User::select("users.*")->join("conge","users.id","=","conge.user_id")->where("department_id",$dapartment_id)->get();
        return view("Conge.index",[
            "conge"=>$AllDepartmentEmployees
        ]);
    }


}
