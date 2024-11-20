<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    // Specify the table name explicitly (if not following Laravel's default convention)
    protected $table = 'userdetails';

    // Specify the fields that can be mass-assigned
    protected $fillable = [
        'email', 
        'username', 
        'password', 
    ];
}
