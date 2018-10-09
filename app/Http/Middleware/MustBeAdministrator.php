<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdministrator
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

        if(\Auth::user() && \Auth::user()->email == "hamidpahlevani1994@gmail.com"){
            return $next($request);
        }
        return redirect('/');
    }
}
