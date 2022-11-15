<?php

namespace App\Http\Middleware;
use Artesaos\SEOTools\Facades\SEOMeta;

use Closure;
use Illuminate\Http\Request;
use App;
use Auth;
use Session;

class AccessControlMiddleware
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


        //include 'ddd/translation_process_currency.php';

       $language = Session::get('language');


       if ($language == '') {
            Session::put('language','english');
        }

        if($language == 'english') {
            App::setLocale('en');
        }

        if($language == 'france') {
            App::setLocale('fr');
        }

        // dd($language);

        return $next($request);
        
    }
}
