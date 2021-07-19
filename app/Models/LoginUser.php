<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginUser extends Model
{
    protected $table = 'login_user';
    protected $fillable = [
        'user_id',
        'email',
        'password',
    ];
}
