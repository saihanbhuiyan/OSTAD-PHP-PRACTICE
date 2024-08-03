<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class secrateMiddlewareM16Cls1
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(!$request->user()){
        //     return response("hello from secrateMiddlewareM16Cls1");
        // }
        if($request->input('password')!=1111){
            // return response("you are Unutorizes");
    // laravele onek error masg code ase ja amra return ba unothorised na diye oi sokol error code use korte pari
    // abort(403);//FORBIDDEN
    // abort(401);//UNOTHORIZED
    // abort(404);//NOT FOUND
    // abort(400);//BAD REQUEST
    abort(500);//INTERNAL SERVER ERROR

        } //output : this is secret page(success to access secret page)
        return $next($request);
    }
}
