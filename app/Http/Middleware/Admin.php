<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Auth;
class Admin
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

        // if (Auth::check() && Auth::user()->is_admin == 1) {
            return $next($request);
        // }
        // return new Response(view('welcome'));

    }
}
