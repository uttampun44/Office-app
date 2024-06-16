<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    protected $table = "employees";

    protected $fillable = [
       'name',
       'email',
       'password',
       'gender',
       'number',
       'date_of_birth',
       'designation',
       'address',
     ];

     public function users()
     {
      return $this->belongsTo(User::class);
     }

     public function designation():BelongsTo
     {
      return $this->belongsTo(Role::class, 'role_id');
     }

     

    use HasFactory;
}
