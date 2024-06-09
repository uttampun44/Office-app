<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    protected $table = "role_has_permissions";

    protected $fillable = [

        'permission_id',
        'role_id',
    ];

    public function roles()
    {
        return $this->belongsTo(Role::class, 'id');
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class, 'id');
    }

    use HasFactory;
}
