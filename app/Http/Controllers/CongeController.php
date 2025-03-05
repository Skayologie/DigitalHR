<?php

namespace App\Http\Controllers;

use App\Models\Conge;
use Illuminate\Http\Request;

class CongeController extends Controller
{
    //
    public function index(){
        return view("Conge.index",[
            "conge"=>Conge::all()
        ]);
    }
}
