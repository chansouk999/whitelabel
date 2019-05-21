<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class authcheck
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
        // if(Auth::check()){
        //     echo Auth::user();
            
        // }else{
        //     echo "NO ONE LOGIN";
        // }
        return $next($request);
    }
}
