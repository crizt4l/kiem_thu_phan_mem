<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'Username',
        'Password',
        'Email',
        'Phone',
        'Address',
        'Fullname',
        'Avatar'
    ];
}
