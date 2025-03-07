<?php

namespace App\Http\Controllers;

use App\Models\Conge;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RhController extends Controller
{
    //

    public function index(){
        $rhsUsers = User::select("users.*")
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->where('roles.name', 'Rhs')
            ->get();
        return view("admin.manageRh", [
            "Rhs"=>$rhsUsers

            ]
        );
    }

    public function showAcceptedCongeFromManager(){
        return view("Conge.index", [
                "conge"=>Conge::all()
            ]
        );
    }
    public function acceptConge($id){
        Conge::where('id',$id)->update(['RhAccept' => 1,'status' => "accepted"]);
        return redirect()->route("manage/leave");
    }
    public function refuseConge($id){
        Conge::where('id',$id)->update(['RhAccept' => 0,'status' => "refused"]);
        return redirect()->route("manage/leave");
    }
}
