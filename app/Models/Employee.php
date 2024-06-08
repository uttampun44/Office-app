<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
       'user_id'
     ];

    use HasFactory;
}
