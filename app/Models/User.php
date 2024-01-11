<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Table name
    protected $table = 'users';

    // Guarded attributes
    protected $guarded = [];

    // Relationships, methods, and other code specific to the User model
}
