<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\access_token;
use Illuminate\Support\Facades\Cache;
use App\OauthClient;
use Illuminate\Support\Facades\Session;
use Auth;

class RedirectBackController extends Controller
{
    public function requestdata(Request $req)
    {
        return OauthClient::where('id', '=', $req->ClientID)->get()[0];
    }
    public function getsecret($id, $url)
    {
        try {
            // clientid
            $http =  new Client;
            $res = $http->post($url . '/returnrequest', [
                'form_params' => [
                    'clientid' => $id,
                ]
            ]);
            $reqdata = json_decode((string) $res->getBody(), true);
            Cache::put('MainClientID', $id, 3147502);
            Cache::put('MainClientSecret', $reqdata['secret'], 3147502);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function redirect(Request $req)
    {
        // return $req;
        $this->getsecret($req->CurrentClientID, $req->url);
        Cache::put('mainUrl', $req->url, 3714526);
        // Cache::get('mainUrl');
        $http = new Client();

        $query = http_build_query([
            'client_id' => $req->CurrentClientID,
            'redirect_uri' => \Request::root() . '/callback',
            'response_type' => 'code',
            'scope' => '',
        ]);
        // Cache::get('mainUrl');
        return redirect(Cache::get('mainUrl') . '/oauth/authorize?' . $query);
    }
  
    public function callback(Request $request)
    {
        $http = new Client;
        $response = $http->post(Cache::get('mainUrl') . '/oauth/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => Cache::get('MainClientID'),
                'client_secret' => Cache::get('MainClientSecret'),
                'redirect_uri' => \Request::root() . '/callback',
                'code' => $request->code,
            ],
        ]);

        $accessdata = json_decode((string) $response->getBody(), true);
        $header = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $accessdata['access_token']
        ];

        Cache::put('webToken', $accessdata['access_token'], 3714526);

        $resuser = $http->get(Cache::get('mainUrl') . '/api/users', ['headers' => $header]);
        $data =  json_decode((string) $resuser->getBody(), true);
        $date = date('Y-m-d');
        $check = access_token::where([['created_at', 'like', '%' . $date . '%'], ['user_id', '=', '' . $data['user_id'] . '']])->get()->count();
        if ($check < 1) {
            access_token::create([
                'user_id' => $data['user_id'],
                'access_token' => $accessdata['access_token']
            ]);
        }
        // Auth::loginUsingId(Cache::get('userid'));
        // return Cache::get('userid');
        return redirect(Cache::get('mainUrl') . '/getlogin?stockname=' . Cache::get("name") . '&loop=' . Cache::get("loop") . '&country=' . Cache::get("country"));
        //     // return [$accessdata,$data];

    }
}
