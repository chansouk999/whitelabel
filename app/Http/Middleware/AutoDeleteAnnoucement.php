<?php

namespace App\Http\Middleware;

use Closure;
use DateTime;
use App\Announcement;

class AutoDeleteAnnoucement
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
        // $date2 = new DateTime;
        // $date2->modify('-1 week');
        // $formatted_date = $date2->format('Y-m-d H:i:s');
        // $get = Announcement::where('created_at', '<=',  $formatted_date)->delete();
        // dd($get);
        return $next($request);
    }
}
