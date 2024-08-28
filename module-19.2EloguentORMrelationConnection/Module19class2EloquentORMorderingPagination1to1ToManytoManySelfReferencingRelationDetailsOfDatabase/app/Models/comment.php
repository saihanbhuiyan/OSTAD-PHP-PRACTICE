<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    function user()
    {
        return $this->belongsTo(user::class);
    }
    function post()
    {
        return $this->belongsTo(post::class);
    }
    use HasFactory;
}
