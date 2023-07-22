<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyPlace extends Model
{
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
