<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Models\Permission;

class role extends Model
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use HasFactory;

    protected $fillable = ['name','guard_name'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
    public function user(): hasMany
    {
        return $this->hasMany(User::class);
    }
}
