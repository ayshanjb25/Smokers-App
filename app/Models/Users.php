<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'name',
        'date_of_birth',
        'gender',
        'country',
        'mobile', 
        'mobile_verified',
        'email',
        'email_verified',
        'password'
    ];
    //protected $table='users';
}


