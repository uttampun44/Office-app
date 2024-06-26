<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    protected $table = "roles";

    protected $fillable = [
      'roles_name'
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_has_permissions', 'role_id', 'permission_id');
    }

    public function employees():HasMany
    {
      return $this->hasMany(Employee::class, 'role_id');
    }

    public function user()
    {
      return $this->hasMany(User::class);
    }
   
    use HasFactory;
}
