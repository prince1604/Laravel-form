<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // // print_r($request->age);
        // if($request->age<18){
        //     die('You are under 18 and can not acces this website ');
        // }

        if($request->age<18){
            die('you are under age ');
        }
        return $next($request);
    }
}
