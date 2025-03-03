<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursus extends Model
{
    /** @use HasFactory<\Database\Factories\CursusFactory> */
    use HasFactory;

    protected $fillable = [
        "cursus_title",
        "cursus_date",
    ];
}
