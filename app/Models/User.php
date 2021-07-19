<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'full_name', 'phone_number', 'image', 'address', 'old'
    ];
   
}
