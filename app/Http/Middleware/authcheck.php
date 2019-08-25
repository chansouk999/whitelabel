<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\Facades\DB;
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
        // echo User::count()+1;
        // echo Cookie::get('accessTokenDer');

        return $next($request);
    }
}
