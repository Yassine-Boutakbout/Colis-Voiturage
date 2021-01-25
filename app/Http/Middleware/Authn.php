<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class Authn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
    {   
         
         if (Session::has('login')) {
        return $next($request);
}
        
         else {

          session (['intended' => url()->full()]);

         return redirect('/auth');

           }
    }
}
