<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class SystemUsers extends Authenticatable
{
    use HasFactory, Notifiable;
    // Database table name:users
    protected $table = "users";
    protected $primaryKey = "user_id";

    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
        'is_active'
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    // Automatically hash the password when setting it up
    public function setPasswordAttribute($value){
        if(\Illuminate\Support\Facades\Hash::needsRehash($value)){
            $this->attributes['password'] = bcrypt($value);
        } else {
            $this->attributes['password'] = $value;
        }
    }
}
