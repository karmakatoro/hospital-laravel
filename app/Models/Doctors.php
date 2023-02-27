<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'user_name',
        'email',
        'date_of_birth',
        'gender',
        'address',
        'country_id',
        'city',
        'role_id',
        'affected_id',
        'phone',
        'bio',
        'status'
    ];
}
