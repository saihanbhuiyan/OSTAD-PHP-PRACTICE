<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    function post_tag()
    {
        return $this->hasMany(post_tag::class);
    }
    use HasFactory;
}
