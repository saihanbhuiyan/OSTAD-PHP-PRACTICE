<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    function user()
    {
        return $this->belongsTo(user::class);
    }
    function comment()
    {
        return $this->hasMany(comment::class);
    }
    function post_tag()
    {
        return $this->hasMany(post_tag::class);
    }
    use HasFactory;
}
