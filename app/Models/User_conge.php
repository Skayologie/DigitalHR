<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class User_conge extends Model
{
    protected $table = "user_conges_information";
    protected $fillable = [
        "conges_restants",
        "Conges_pris"
    ];
    public function user(){
        return $this->hasOne(User::class,"id","user_id");
    }

    //
}
