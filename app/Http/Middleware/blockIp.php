<?php

namespace App\Http\Middleware;

use Closure;

class blockIp
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

        function checkCountryCodebyIp($ip){
            $res = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
            $data = [
                'city'=> $res->geoplugin_countryCode,
                'countryCode'=> $res->geoplugin_countryCode,
                'countryName'=> $res->geoplugin_countryName
            ];
            return $data;
        }

        $ip =  \Request::getClientIp();
        $countryCode = checkCountryCodebyIp('159.138.130.64');
        if($countryCode['countryName'] != 'Laos'){
            \Log::warning("Unauthorized access, IP address was => ".\Request::getClientIp());
            return response()->json(['Unauthorized!'],400);
        }
        return $next($request);
    }
}
