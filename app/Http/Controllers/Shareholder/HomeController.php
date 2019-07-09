<?php

namespace App\Http\Controllers\Shareholder;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:shareholders');
    }

    public function index(){
        return view('admin.shareholder');
    }
    public function getApi(){
        try{
            $http = new Client;
            $res =  $http->get('http://localhost:8003/api/getbetHisoty');
            return $accessdata = json_decode((string) $res->getBody(), true);
        }catch(\Exception $ex){
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
}
