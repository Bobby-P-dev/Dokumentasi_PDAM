<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'role',
        'profile_picture'
    ];

    protected $attributes = [
        'role' => 'user',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
    protected $hidden = [
        'password',
    ];
    protected $primaryKey = 'id';

    public function laporans()
    {
        return $this->hasMany(Laporans::class);
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
