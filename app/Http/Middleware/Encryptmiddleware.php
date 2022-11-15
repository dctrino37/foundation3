<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Encryptmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // dd("dbj");
        // $a = encryptData($request->data);
        // $request->merge(array("data" => $a));
        // return ($request);
        // $response = $next($request);
        //Your logic goes here e.g return redirect('/)

        return $next($request);
    }

    // public function terminate($request, Closure $next)
    // {
    //     // $response = $next($request);
    //     //Your logic goes here e.g return redirect('/)

    //     return $request;
    // }
}
