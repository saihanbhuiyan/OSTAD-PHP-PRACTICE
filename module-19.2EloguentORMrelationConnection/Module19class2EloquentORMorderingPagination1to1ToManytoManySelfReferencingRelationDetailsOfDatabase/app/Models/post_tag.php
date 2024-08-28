<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_tag extends Model
{
    function post()
    {
        return $this->belongsTo(post::class);
    }
    function tag(){
        return $this->belongsTo(tag::class);
    }
    use HasFactory;
}
