<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Conge extends Model
{
    use hasfactory;
    protected $table = "conge";
    //
    protected $fillable = [
        "user_id",
        "user_id",
        "start_at",
        "end_at",
        "duration",
        "type",
        "status",
    ];
    public function user(): HasOne
    {
        return $this->hasOne(User::class,"id","user_id");
    }

}
