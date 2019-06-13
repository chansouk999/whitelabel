<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as Reqst;
use Auth;
use Jenssegers\Agent\Agent;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Validator;
use App\clientid;
use Illuminate\Support\Facades\Cache;
use App\access_token;
use Illuminate\Support\Facades\DB;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\Environment\Console;

class MasterController extends Controller
{
  
    public function checkreigster(Request $req){
        
        $email = $req->email;
        $name = $req->name;
        $countm = User::where('email','=',$email)->get()->count();
        $countn = User::where('name','=',$name)->get()->count();
        if($countn > 0){
            return ['success'=>'nameexist'];
        }elseif($countm){
            return ['success'=>'emailexist'];
        }else{
            return ['success'=>'success'];
        }

    }
    public function payment(Request $req){
        
    }
    public function welcome()
    {

        // GET TOKEN ADMIN
        // GET TOKEN ADMIN
        $agent = new Agent();
        if ($agent->isMobile()) {
            // Alert::success('Mobile', 'Mobile Mode');
            return view('mobile.welcome');
        } else {
            //  Alert::success('Desktop', 'Desktop Mode');
            return view('desktop.welcome');
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
        $check = User::where('email', '=', '' . $email . '')->get()->count();
        if ($check < 1) {
            return ['success' => 'notfound'];
        }
    }
    public function reqwithdraw(Request $req)
    { }
    public function sendsms(Request $req)
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('222a363b', 'Krn82zRNs6ZE9GmT');
        $client = new \Nexmo\Client($basic,true);
        $code =mt_rand(100000,989999);

        $message = $client->message()->send([
            'to' => $req->phonenumber,
            'from' => 'Nexmo',
            'text' => 'This is Your Confirmation Code ' .$code 
        ]);
        
        // $message = Nexmo::message()->send([
        //     'to'   => $req->phonenumber,
        //     'from' => '16105552344',
        //     'text' => 'Using the facade to send a message.'
        // ]);

        Cache::put('confirmCode', $code, 1);
        if ($message) {
            return "OK";
        }else{
            return "NOT OK";
        }
    }
    public function payments(Request $req){
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
