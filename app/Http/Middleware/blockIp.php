<?php

namespace App\Http\Middleware;

use Closure;
use \Torann\GeoIP\Facades\GeoIP;
use Auth;
class blockIp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed+
     */
    public function handle($request, Closure $next)
    {

        // [ip] => 159.138.130.64
        // [iso_code] => HK
        // [country] => Hong Kong
        // [city] => Hong Kong
        // [state] => HCW
        // [state_name] => Central and Western
        // [postal_code] =>
        // [lat] => 22.3964
        // [lon] => 114.109
        // [timezone] => Asia/Hong_Kong
        // [continent] => Unknown
        // [currency] => HKD
        // [default] =>
        // [cached] => 1


        $ip =  \Request::getClientIp();

        $check = geoip()->getLocation($ip);
        if ($check['iso_code'] == 'LA' || $ip == '127.0.0.1' || $ip = '192.168.1.134') {
            return $next($request);
        } else {
            return response()->json('Your Country ----> ' . ($check['country']) . ' <---- has been block , to access this site contact vongkeo@gmail.com  ,Thank you');
        }
        return $next($request);
    }
}
