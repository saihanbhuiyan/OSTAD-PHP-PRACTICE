<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demo1()
    {
       $result= User::with(['profile','post','comment'])->get();
       // $result= User::all();
       return $result;
    }
}
