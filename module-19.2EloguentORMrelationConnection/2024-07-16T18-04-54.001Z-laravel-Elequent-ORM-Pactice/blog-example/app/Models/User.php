<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{


    function profile()
    {
        return $this->hasOne(Profile::class);
    }


    function post()
    {
        return $this->hasMany(Post::class);
    }


    function comment()
    {
        return $this->hasMany(Comment::class);
    }



    use HasFactory;
}
