<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname,lastname,username,email,birth,gender
        address,country,city,role,affected,phone,bio,status'
    ];
}
