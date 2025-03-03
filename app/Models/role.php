<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use mysql_xdevapi\Table;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;

class role extends Model
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use HasFactory , HasRoles;

    protected $table = "roles";
    protected $fillable = ['name','guard_name'];

    public function permissions(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Permission::class,"role_has_permissions");
    }
    public function user(): hasMany
    {
        return $this->hasMany(User::class);
    }
}
