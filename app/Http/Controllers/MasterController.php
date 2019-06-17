<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as Reqst;
use Auth;
use GuzzleHttp\Client;
use Jenssegers\Agent\Agent;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Validator;
use App\clientid;
use Illuminate\Support\Facades\Cache;
use App\access_token;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\Environment\Console;


class MasterController extends Controller
{
    protected $urlforserver = 'http://159.138.130.64'; // 1 use this if you are running on server
    protected $urlforserverapi = 'http://lec68.com'; // 2 use this if you are running on server
    protected $urlforlocal8003 = 'http://localhost:8003'; //1 use this if you are running on localhost
    protected $urlforlocal8004 = 'http://localhost:8004'; //2 use this if you are running on localhost
    protected $data = [];
    public function returncode($data)
    {
        return ['code' => $data];
    }
    public function checkuser(array $data)
    {
        $http = new Client;
        $response = $http->post($this->urlforlocal8003 . '/api/checkuser', [ //replace url with $this->urlforserver
            'form_params' => [
                'user_email' => $data['email'],
            ],
        ]);
        $accessdata = json_decode((string)$response->getBody(), true);
        if ($accessdata['code'] == 0) {
            return $this->returncode(0);
        } else {
            return $this->returncode(200);
        }
    }
    public function getfreshtoken()
    {
        $id = Auth::user()->pro_id . '_' . Auth::user()->user_id;
        $http = new Client;
        // function dehash(){
        $data = Auth::user()->pwdhashed;
        $pwd = explode('-', $data);
        $gotpwd = [];
        foreach ($pwd as $p) {
            $gotpwd[] = substr($p, -1, 1);
        }
        $realpwd = implode('', $gotpwd);
        $dehashed =  $realpwd; //GOTED PASSWORD
        // }
        $checkit = [];
        $checkit['email'] = Auth::user()->email;
        $checkuser  = $this->checkuser($checkit);
        if ($checkuser['code'] == 200) {
            $response = $http->post('http://localhost:8003/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => '2',
                    'client_secret' => 'n7ZrJ7VGv4b6QuQjZ1AKWZ4w4AuvX88JuxzlPjGu',
                    'username' => Auth::user()->email,
                    'password' => $dehashed,
                    'scope' => '',
                ],
            ]);
            $accessdata = json_decode((string)$response->getBody(), true);
            $date = date('Y-m-d');
            $check = access_token::where([['created_at', 'like', '%' . $date . '%'], ['user_id', '=', '' . $id . '']])->get()->count();
            if ($check < 1) {
                access_token::create([
                    'user_id' =>  $id,
                    'access_token' => $accessdata['access_token']
                ]);
            }
            return ['token'=>$accessdata['access_token'],$checkuser];
        }else{
            return $this->returncode(0);
        }
    }
    public function transfertoapi(Request $req)
    {
        $userid = Auth::user()->pro_id . '_' . Auth::user()->user_id;
        $http = new Client;
        $accesstoken = access_token::where('user_id', '=', '' . $userid . '')->limit(1)->get();
        $countcheck = $accesstoken->count();
        if ($countcheck < 1) {
            $token = $this->getfreshtoken()['token'];
        } else {
            $token =   $accesstoken->pluck('access_token')[0];
        }
        $userbl = Auth::user()->userBalance;
        $res =$this->getfreshtoken();
        return $res;
        if ($req->amount > $userbl) {
            return $this->returncode(99);//not enough
        }elseif($res['code']==0){
            return $this->returncode(0);
        }
        else {
            $header = [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $token
            ];
            // return $header;
            $response = $http->post($this->urlforlocal8003 . '/api/transfertoapi', [ //replace url with $this->urlforserver
                'form_params' => [
                    'amount' => $req->amount,
                    'user_id' => $userid,
                ], 'headers' => $header
            ]);
            return $accessdata = json_decode((string)$response->getBody(), true);
        }
    }
    public function checkconnection()
    {
        if (Auth::check()) {
            return ['success' => 'success'];
        } else {
            return ['success' => 'timeout'];
        }
    }

    public function checkreigster(Request $req)
    {

        $email = $req->email;
        $name = $req->name;
        $countm = User::where('email', '=', $email)->get()->count();
        $countn = User::where('name', '=', $name)->get()->count();
        if ($countn > 0) {
            return ['success' => 'nameexist'];
        } elseif ($countm) {
            return ['success' => 'emailexist'];
        } else {
            return ['success' => 'success'];
        }
    }
    public function payment()
    {
        return "HELLO THIS PAYMENT FUNCTION";
    }

    public function welcome()
    {

        // GET TOKEN ADMIN
        // GET TOKEN ADMIN
        $agent = new Agent();
        if ($agent->isMobile()) {
            // Alert::success('Mobile', 'Mobile Mode');
            $checkpcormb = "mb";
            return view('mobile.welcome', compact('checkpcormb'));
            // return view('mobile.message', compact('checkpcormb'));
        } else {
            //  Alert::success('Desktop', 'Desktop Mode');
            $checkpcormb = "pc";
            return view('desktop.welcome', compact('checkpcormb'));
            // return view('desktop.message', compact('checkpcormb'));
        }
    }
    public function updatemoney(Request $req)
    {
        // $balnce = 900000;
        // $id = $req;
        // User::where('id',''.$id.'')->update(['userBalance'=>$balnce]);
    }
    public function userdetaildata()
    {
        $id = Auth::user()->id;
        $date = date('Y-m-d');
        return DB::table('users')
            ->join('oauth_clients', 'users.id', '=', 'oauth_clients.user_id')
            ->where('users.id', $id)
            ->orderby('oauth_clients.created_at', 'desc')->limit(1)->get();
    }
    public function checklogin(Request $req)
    {
        $email = $req->email;
        $password = $req->pwd;
        $check = User::where('email', '=', '' . $email . '')->get();
        $count = $check->count();
        // return $check;
        if ($count < 1) {
            // Alert::error('Error Message', 'Optional Title');
            return ['success' => 'notfound'];
        } else {
            $checkpwd = $check->pluck('password')[0];
            if (!Hash::check($password, $checkpwd)) {
                return ['success' => 'passwordnotmatch'];
            } else {
                return ['success' => 'success'];
            }
        }
    }
    public function reqwithdraw(Request $req)
    { }
    public function sendsms(Request $req)
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('222a363b', 'Krn82zRNs6ZE9GmT');
        $client = new \Nexmo\Client($basic, true);
        $code = mt_rand(100000, 989999);

        $message = $client->message()->send([
            'to' => $req->phonenumber,
            'from' => 'Nexmo',
            'text' => 'This is Your Confirmation Code ' . $code
        ]);

        // $message = Nexmo::message()->send([
        //     'to'   => $req->phonenumber,
        //     'from' => '16105552344',
        //     'text' => 'Using the facade to send a message.'
        // ]);

        Cache::put('confirmCode', $code, 1);
        if ($message) {
            return "OK";
        } else {
            return "NOT OK";
        }
    }
    public function payments(Request $req)
    {
        Omnipay::setGateway('PayPal');
        $cardInput = [
            'number'      => '4444333322221111',
            'firstName'   => 'MR. WALTER WHITE',
            'lastName' => 'Tables',
            'expiryMonth' => '03',
            'expiryYear'  => '16',
            'cvv'         => '333',
        ];
        $card = Omnipay::creditCard($cardInput);

        // $response = Omnipay::purchase([
        //     'amount'    => '100.00',
        //     'returnUrl' => 'http://bobjones.com/payment/return',
        //     'cancelUrl' => 'http://bobjones.com/payment/cancel',
        //     'card'      => $cardInput
        // ])->send();

        $response = Omnipay::purchase([
            'amount' => '100.00',
            'currency' => 'USD',
            'card'   => $cardInput
        ])->send();

        dd($response->getMessage());
    }
}
