<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class register extends  Authenticatable
{
     use HasFactory, HasApiTokens;

    protected $table = 'register';
    protected $fillable = [
        'name',
        'email',
        'school',
        'nicky',
        'password',
    ];
}
