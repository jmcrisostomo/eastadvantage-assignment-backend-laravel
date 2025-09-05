<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $fillable = ['full_name', 'email', 'role'];

    use HasFactory;

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
}
