<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemUsers extends Model
{
    // Database table name:users
    protected $table = "users";

    protected $primaryKey = "user_id";

    protected $fillable = [
        'username',
        'email',
        'password',
        'status',
        'creator'
    ];

    protected $hidden = [
        'role',
        'created_at'
    ];

    // function to create a new user

    // function to edit a user

    // function to delete a user

    // function to view users from DB to table

    // function to search user

    // function to print user logs
}
