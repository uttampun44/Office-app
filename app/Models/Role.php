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

    public function permission()
    {
      return $this->belongsTo(Role::class);
    }

    public function employees():HasMany
    {
      return $this->hasMany(Employee::class, 'designation_id');
    }
    use HasFactory;
}
