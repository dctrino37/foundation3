<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\ParameterBag;

class Decryptmiddleware
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
        $a = decryptData($request->data);
        // dd($a);
        $request->merge(array("data" => $a));
        // dd($request->data);
        // $request->replace(json_decode($request->data));
        return $next($request);
    }

    // private function clean(ParameterBag $bag)
    // {
    //     $bag->replace($this->cleanData($bag->all()));
    // }

    // private function cleanData(array $data)
    // {
    //     // dd($data['data']);
    //     return collect($data['data'])->map(function ($value, $key) {

    //         // $data = $request->data;
    //         $value = decryptData($value);
    //         $a = json_decode($value, true);
    //         foreach ($a as $key => $value) {
    //             // dd($key);
    //             $key = $value;
    //         }
    //         dd($value);
    //         if ($key == 'data') {
    //             $value = decryptData($value);
    //             $value = json_decode($value);
    //             dd($value);
    //             // return preg_replace("/([^0-9])/", '', $value);
    //             return $value;
    //         } else {
    //             return $value;
    //         }
    //         return $value;
    //     })->all();
    // }
}
