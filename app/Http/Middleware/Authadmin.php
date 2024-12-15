<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authadmin
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
        if(!session()->has(config('app.session_admin'))){
            return redirect(config('app.controller_login_admin'));
        }
        return $next($request);
    }
}
