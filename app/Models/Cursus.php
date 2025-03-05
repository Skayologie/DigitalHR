<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursus extends Model
{
    /** @use HasFactory<\Database\Factories\CursusFactory> */
    use HasFactory;
    protected $table = "cursus";
    protected $fillable = [
        'user_id',
        'grade_id',
        'formation_id',
        'contract_id',
        'post_id',
        'date_debut',
        'date_fin',
        'commentaire',
    ];
}
