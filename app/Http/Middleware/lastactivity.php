<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use DateTime;
class lastactivity
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
        // date_default_timezone_set("Asia/Shanghai");
        // $date2 = new DateTime;
        // $date2->modify('-5 minutes');
        // $formatted_date = $date2->format('Y-m-d H:i:s');
        // $now = strtotime(date('y-m-d H:i:s')) - 1200;
        // $date = date('y-m-d H:i:s');
        // if (Auth::check()) {
        //     $id = sprintf('%10d', Auth::user()->id);
        //     $last_activity = strtotime(Auth::user()->last_activity);
        //     $diffout = strtotime('now');
        //     $second = $diffout - $last_activity;

        //     $minutes = (intval($second) / 60) % 60;
        //     $hours = (intval($second) / 3600) % 24;

        //     if ($minutes > 5) {
        //         $DH = DB::UPDATE(" UPDATE users
        //         SET userStatus = 'offline' 
        //         WHERE last_activity < '" . $formatted_date . "' ");
        //     } else {
        //         $checkoffline = trim(User::where('user_id', '=', $id)->get()->pluck('userStatus'), '["]');
        //         if ($checkoffline == 'offline') {
        //             User::where('user_id','=',$id)->update([''=>'online']);
        //         }
        //     }
        //     User::where('last_activity', '=', null)->update(['last_activity' => $date]);
        //     if ($last_activity < $now) {
        //         Auth::guard('web')->logout();
        //         return redirect('/');
        //     }
        // }
        date_default_timezone_set("Asia/Shanghai");
        $date2 = new DateTime;
        $date2->modify('-5 minutes');
        $formatted_date = $date2->format('Y-m-d H:i:s');
        User::where('last_activity','<',''.$formatted_date.'')->update(['userStatus'=>'offine']);
        return $next($request);
    }
}
