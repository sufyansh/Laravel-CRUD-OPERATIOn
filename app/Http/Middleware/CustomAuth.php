<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
         $path = $request->path();

        // if(($path!="login" || !Session::get('user')) &&($path!="register" || !Session::get('user'))){
        //     return redirect('/login');
        // }else if(($path=="login" || $path=="register") && Session::get('user')){
        //     return redirect('/home');
        // }
        return $next($request);
    }
}
