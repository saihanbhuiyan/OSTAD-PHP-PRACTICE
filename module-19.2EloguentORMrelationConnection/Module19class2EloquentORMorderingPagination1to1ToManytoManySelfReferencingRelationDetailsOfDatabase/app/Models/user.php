<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    function profile()
    {
        return $this->hasOne(profile::class);
    }
    function post()
    {
        return $this->hasMany(post::class);
    }
    function comment()
    {
        return $this->hasMany(comment::class);
    }
    use HasFactory;
}
