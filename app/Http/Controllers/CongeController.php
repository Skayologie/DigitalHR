<?php

namespace App\Http\Controllers;

use App\Models\Conge;
use App\Models\User;
use App\Models\User_conge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CongeController extends Controller
{
    //
    public function index(){
        return view("Conge.index",[
            "conge"=>Conge::all()
        ]);
    }


    public function store(Request $request){
        $data = $request->validate([
            'dateDeDebut' => 'required|date',  // Ensures it's a valid date
            'dateDeFin' => 'required|date|after:start_date', // Must be after start_date
            'conge_type'=>'required|string|in:Annuel,Maladie,Recuperation',
            'duration'=>'required|integer',
            'motif'=>'nullable',
        ]);
        if($request->input('user_id') == Auth::user()->id){
            $result = Conge::create([
                "user_id"=>Auth::user()->id,
                "start_at"=>$data["dateDeDebut"],
                "end_at"=>$data["dateDeFin"],
                "duration"=>$data["duration"],
                "type"=>$data["conge_type"],
                "status"=>"pending"
            ]);
//            if ($result){
//                $DataUserConges = User_conge::where("user_id",Auth::user()->id)->first();
//                $DataUserConges->update([
//                    "conges_restants"=>$DataUserConges->total_annual_conges - $data["duration"],
//                    "Conges_pris"=>$DataUserConges->total_annual_conges + $data["duration"]
//                ]);
//            }
            return redirect()->to("dashboard");

        }else{
            dd("the id is not correct !!");
        }

    }
    public function showMyRequests(){
        $DataUserConges = Conge::where("user_id", Auth::id())->get();
//        $DataUserConges = Conge::all();
            return view("Conge.requests",[
                "dataConges"=>$DataUserConges
            ]);
    }
    public function showRequestDetails(User $user){
        $DataUserConges = Conge::where("user_id", $user->id)->get();

        return view("Conge.requestDetails",[
            "data"=>$DataUserConges
        ]);
    }

    public function AllRequests(){
        $DataUserConges = Conge::where("user_id", Auth::id())->get();
        return view("Conge.employeeRequests",[
            "data"=>$DataUserConges
        ]);

    }
}
