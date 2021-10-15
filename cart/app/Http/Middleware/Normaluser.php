<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Normaluser
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
        //role 1 normal user
       if(auth()->user()->role_user==1){
           return $next($request);
       }
       return redirect('designer/home')->with('error', 'You cant access client page');
    }
    //not client redirection
    

}
