<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentFactory> */
    use HasFactory;
    protected $table = "departments";
    protected $fillable = [
      "name",
      "description",
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
