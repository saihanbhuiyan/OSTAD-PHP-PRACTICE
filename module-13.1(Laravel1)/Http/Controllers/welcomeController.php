<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    //creating c controller php artisan make:controller welcomeController
    public function welcome(){
        return "welcome to new islamic life jurny";
    }
}
