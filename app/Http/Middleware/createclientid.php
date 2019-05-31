<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\clientid;
use App\User;
class createclientid
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
        $token = str_random(40);
       
        $date = date('Y-m-d');
        if(Auth::check()){
            $id = Auth::user()->id;
            $check = clientid::where([['user_id',$id],['created_at','like','%'.$date.'%']])->get();
            if($check == '[]'){
                $clid = new clientid;
                $clid->user_id = Auth::user()->id;
                $clid->name = 'www.lec68.com';
                $clid->secret = $token;
                $clid->redirect ='http://localhost:8003/callback';
                $clid->personal_access_client = 0;
                $clid->password_client = 0;
                $clid->revoked = 0;
                $clid->save();
            }
        }
        return $next($request);
    }
}
