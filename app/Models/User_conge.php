<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class User_conge extends Model
{
    protected $table = "user_conges_information";

    public function User(){
        return $this->hasOne(User::class,"user_id","id");
    }

    //
}
