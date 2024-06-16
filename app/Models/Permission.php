<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = "permissions";

    protected $fillable = [
      'permission_name'
    ];
    use HasFactory;

    public function roles()
    {
      return $this->belongsToMany(Role::class, 'role_has_permission', 'role_id', 'permission_id');
    }
}
