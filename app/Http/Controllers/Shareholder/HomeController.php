<?php

namespace App\Http\Controllers\Shareholder;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use App\Agent;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:shareholders');
    }

    public function index()
    {
        return view('admin.shareholder');
    }
    public function getApi($date)
    {

        try {
            $http = new Client;
            $res =  $http->post('http://159.138.45.25/api/getbetHisoty', [
                'form_params' => ['code' => $date]
            ]);
            return $accessdata = json_decode((string) $res->getBody(), true);
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getAgent()
    {
        return Agent::orderby('created_at', 'desc')->get();
    }
}
