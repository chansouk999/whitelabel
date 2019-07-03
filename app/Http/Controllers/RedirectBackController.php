<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\access_token;
use Illuminate\Support\Facades\Cache;

class RedirectBackController extends Controller
{
    public function redirect(Request $req)
    {
        Cache::put('mainUrl',$req->url,3714526);
        // Cache::get('mainUrl');
        $http = new Client();

        $query = http_build_query([
            'client_id' => '3',
            'redirect_uri' => \Request::root().'/callback',
            'response_type' => 'code',
            'scope' => '',
        ]);
        // Cache::get('mainUrl');
        return redirect(Cache::get('mainUrl').'/oauth/authorize?' . $query);
    }
    public function callback(Request $request)
    {
        $http = new Client;
        $response = $http->post( Cache::get('mainUrl').'/oauth/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => '3',
                'client_secret' => 'XhW9xjDWoh3ieRwmECmSm82iDJ7Gv2OOkGi6HU2W',
                'redirect_uri' => \Request::root().'/callback',
                'code' => $request->code,
            ],
        ]);
        $accessdata = json_decode((string) $response->getBody(), true);
        $header = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $accessdata['access_token']
        ];
        Cache::put('webToken',$accessdata['access_token'],3714526);

        $resuser = $http->get(Cache::get('mainUrl').'/api/users', ['headers' => $header]);
        $data =  json_decode((string) $resuser->getBody(), true);
        $date = date('Y-m-d');
        $check = access_token::where([['created_at', 'like', '%' . $date . '%'], ['user_id', '=', '' . $data['user_id'] . '']])->get()->count();
        if ($check < 1) {
            access_token::create([
                'user_id' => $data['user_id'],
                'access_token' => $accessdata['access_token']
            ]);
        }

        return redirect(Cache::get('mainUrl').'/igotologin');
        //     // return [$accessdata,$data];

    }
}
