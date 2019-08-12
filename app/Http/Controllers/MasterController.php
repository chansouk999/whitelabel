<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ActivityLogController as ActivityLog;

use Illuminate\Http\Request;
use App\Request as Reqst;
use App\Selfservice;
use Auth;
use GuzzleHttp\Client;
use Jenssegers\Agent\Agent;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Validator;
use App\clientid;
use Illuminate\Support\Facades\Cache;
use App\access_token;
use App\Admin;
use App\admin_access;
use App\Http\Controllers\StaticController as getfunction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Admintype;
use App\role;
use App\withdraw_methods;
use App\userdetail;
use App\Http\Controllers\CatchExceptionController as CatchEr;
use DateTime;
use App\Http\Controllers\CardController as CardController;
use App\access_record;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\Environment\Console;
use League\Flysystem\Exception;
use App\OauthClient;
use App\Carousel;
use App\Http\Controllers\getHeaderController as header;
use App\Rolling_history;
use function GuzzleHttp\json_decode;
use Illuminate\Support\Facades\Cookie;

class MasterController extends Controller
{
    protected $urlforserver = 'http://159.138.130.64'; // 1 use this if you are running on server
    protected $urlforserverapi = 'http://localhost:8003'; // 2 use this if you are running on server
    protected $urlforlocal8003 = 'http://localhost:8003'; //1 use this if you are running on localhost
    protected $urlforlocal8004 = 'http://localhost:8004'; //2 use this if you are running on localhost
    protected $data = [];

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getheader()
    {
        $header = new header;
        return $header->header();
    }




    public function getAlluserdata()
    {
        try {
            $http = new Client;
            $res = $http->get(
                Cache::get('mainUrl') . '/api/getAlluserdata/' . Auth::user()->user_id,
                ['headers' => $this->getheader()]
            );

            $accessdata = json_decode((string) $res->getBody(), true);

            $totalonline = [];
            foreach ($accessdata['data'] as $tt) {
                $totalonline[] = $tt['time_online'];
            }
            $save = User::where('user_id', Auth::user()->user_id)->update(['totalOnlineHour' => array_sum($totalonline)]);
            return array_sum($totalonline);
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //internal server eeror
        }
    }


    public function adminList()
    {
        try {
            $data = DB::select("select admins.id,admins.created_at, (CASE WHEN admins.role_id = 0 THEN 'EveryThing' ELSE 'SomeContent' END ) as AdminType, admintypes.typeName FROM admins join admintypes on admins.role_id = admintypes.typeID ");
            $catch = new CatchEr;
            return $catch->CheckExption($data);
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //internal server eeror
        }
    }


    public function connectTogame($data)
    {
        $ClientID = $data->pluck('id')[0];
        $ClientSecret = $data->pluck('secret')[0];
        $Redirect = $data->pluck('redirect')[0];
        return redirect('http://localhost:8003/redirect?clientid=' . $ClientID . '&redirect=' . \Request::root());
    }
    public function gotogame()
    {

        $query = http_build_query([
            'client_id' => '9',
            'redirect_uri' => 'http://localhost:8003/api/callback',
            'response_type' => 'code',
            'scope' => '',
        ]);

        return redirect('http://localhost:8003/api/redirect?' . $query);
    }

    public function fullscreengame(Request $req)
    {

        try {
            $data = [
                'client_id' => '14',
                'client_secret' => '6QtgpRQpy7Suc4wVdlPx2cpBJubi10O8GXlOxnDA',
                'name' => Auth::user()->name,
                'redirect_uri' => \Request::root() . '/callback',
                'userId' => Auth::user()->user_id,
                'webId' => '0001'
            ];

            $http = new Client;

            $send = $http->post('http://localhost:8003/api/redirect', [
                'form_params' => $data
            ]);

            $reqdata = json_decode((string) $send->getBody(), true);

            if (!isset($reqdata['code']) == 200) {
                return $reqdata;
            }

            if ($reqdata['code'] == 200) {
                Cookie::queue('accessToken', $reqdata['data']['token'], 90000);
                return redirect('http://localhost:8003/api/login?stockname=' . $req->stockname . '&loop=' . $req->loop . '&country=' . $req->country);
            }
            return $reqdata;
        } catch (\Eception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //internal server eeror
        }
    }

    public function topupbalance(Request $req)
    {
        $amount = $req->amount;
        // return getfunction::cardControl($amount);
        try {
            DB::enableQueryLog();
            date_default_timezone_set("Asia/Shanghai");
            $ids = Auth::user()->user_id;
            $date2 = new DateTime;
            $date2->modify('-30 second');
            $formatted_date = $date2->format('Y-m-d H:i:s');
            $latesttopuop =  Reqst::where([['userId', '=', $ids], ['created_at', '>=', '' . $formatted_date . '']])->orderby('created_at', 'desc')->limit(1)->get();
            $checkbefore = $latesttopuop->count();
            if ($checkbefore > 0) {
                $tn = strtotime('now');
                $now = strtotime($latesttopuop->pluck('created_at')[0]);
                $second = $tn - $now;
                return $this->returncode(203, [$now, $tn, $second], 'Wait for ' . $second . ' second');
            } else {
                $id = Auth::user()->user_id;
                $check =  withdraw_methods::where('user_id', '=', $id)->pluck('bankAccount');
                // return  $check;
                if ($check != '[]') {
                    $user =  withdraw_methods::where('user_id', '=', $id)->get();
                    $desc = array(
                        'cardno' => $user->pluck('bankAccount')[0],
                        'regcity' => $user->pluck('registerCity')[0],
                        'regprovince' => $user->pluck('registerProvince')[0],
                        'branch' => $user->pluck('branch')[0],
                    );
                    if ($req->detail == 'Withdraw') {
                        $reqdetail = 'Withdraw';
                        $logdt = 'Request Withdraw';
                        $evlogid = '';
                    }
                    if ($req->detail == 'topup') {
                        $reqdetail = 'topup';
                        $logdt = 'Request Top up balance to';
                        $evlogid = $user->pluck('methodId')[0];
                    }

                    $userbance = Auth::user()->userBalance;
                    if ($userbance > $req->amount || $reqdetail == 'topup') {
                        $insert = array(
                            'userId' => Auth::user()->user_id,
                            'requestDetail' => $reqdetail,
                            'amount' => $req->amount,
                            'method' => $user->pluck('methodId')[0],
                            'detail' => json_encode($desc),
                            'requestTime' => date('Y-m-d H:i:s'),
                            'ip' => \Request::getClientIp(),
                            'status' => 'false',
                        );
                        $save = Reqst::create($insert);
                        if ($save) {

                            $method = 'Playerrecord';
                            $data = array(
                                'user_id' => Auth::user()->user_id,
                                'event' => $logdt,
                                'serveby' => '',
                                'amount' => $req->amount,
                                'eventid' => $evlogid,
                                'Time' => date('Y-m-d'),
                            );
                            $Log = new ActivityLog();
                            $Log->storeLog($method, $data);
                            return $this->returncode(200, 'No data', 'success');
                        } else {
                            return $this->returncode(300, '', DB::getQueryLog()); //query error
                        }
                    } else {
                        return $this->returncode(99, '', 'not enough');
                    }
                } else {
                    return $this->returncode(0, '', 'empty');
                }
            }
        } catch (\Exception $e) {
            return $this->returncode(500, '', $e->getMessage()); //internal server eeror
        }
    }
    public function savecarddetail(Request $req)
    {
        try {
            $id = Auth::user()->id;

            $update = array(
                'bankAccount' => $req->bankccount,
                'cardNumber' => $req->cardnumber,
                'methodId' => $req->method,
                'registerProvince' => $req->province,
                'registerCity' => $req->city,
                'branch' => $req->branch,
                'desc' => $req->desc
            );
            DB::enableQueryLog();
            $code = $req->code;
            $check =  userdetail::where('id', '=', '' . $id . '')->pluck('bankAccount');
            if ($check !== '[""]' && $code == 200) {
                return $this->returncode(100, 'No data', 'aleady exist');
            }
            if ($code == 202 || $code == 200) {
                $save = userdetail::where('id', '=', '' . $id . '')->update($update);
                if ($save) {
                    return $this->returncode(200, 'No data', 'success');
                } else {
                    return $this->returncode(300, '', DB::getQueryLog()); //query error
                }
            }
        } catch (\Exception $e) {
            return $this->returncode(500, '', $e->getMessage()); //internal server eeror
        }
    }

    public function reqchangepwd(Request $req)
    {
        try {
            if ($req->code == 202) {
                if (Hash::check($req->pwd, Auth::user()->password)) {
                    return $this->returncode(200, 'No data', 'success');
                } else {
                    return $this->returncode(300, 'No data', 'not match');
                }
            }
            if ($req->code == 200) {
                return $this->splitchangepwd($req->newpassword, $req->cfnewpassword);
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //internal server eeror
        }
    }
    public function splitchangepwd($newpwd, $cfpwd)
    {
        try {

            $Log = new ActivityLog();
            $id = Auth::user()->user_id;
            if ($newpwd == $cfpwd) {
                $hash = $this->hashpwd($newpwd);
                if ($hash['code'] == 200) {
                    $save = User::where('user_id', '=', '' . $id . '')->update(['password' => Hash::make($newpwd), 'pwdhashed' => $hash['data']]);
                    if ($save) {
                        $code = 200;
                        $msg = 'success';
                    } else {
                        $code = 300;
                        $msg = 'query error';
                    }
                    if ($code == 200) {

                        $method = 'Playerrecord';
                        $data = array(
                            'user_id' => Auth::user()->user_id,
                            'event' => 'Change Password',
                            'serveby' => '',
                            'amount' => '',
                            'eventid' => '',
                            'Time' => date('Y-m-d'),
                        );

                        $Log->storeLog($method, $data);


                        $res = $this->changepwdtopai($id, $newpwd);
                        if ($res['code'] == 200) {
                            $code = 200;
                            $msg = 'success with api';
                        } else {
                            $code = 200;
                            $msg = 'success';
                        }
                        return $this->returncode($code, '', $msg);
                    }
                }
            } else {
                return $this->returncode(300, 'No data', 'not match');
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //internal server eeror
        }
    }
    public function changepwdtopai($id, $pwd)
    {
        try {
            $checkaccess = access_token::where('user_id', 'like', '%' . $id . '%')->get()->count();
            if ($checkaccess > 0) {
                return $this->returncode(200, '', 'access');
            } else {
                return $this->returncode(419, '', 'No access');
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //internal server eeror
        }
    }
    public function hashpwd($pwduser)
    {
        try {
            function generateRandomString($length = 7)
            {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }

            $password = $pwduser;
            $hashpassword = str_split($password);
            $count = count($hashpassword);
            $hash = [];
            foreach ($hashpassword as $pwd) {
                $hash[] =  generateRandomString() . "" . $pwd . "";
            }
            $datas = implode('-', $hash);
            $insertpwd = $datas;
            return $this->returncode(200, $insertpwd, 'success');
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //internal server eeror
        }
    }
    public function returncode($code, $data, $msg)
    {
        //100 already exist
        //200 success
        //500 internal erorr
        //300 query error
        //99 not enough
        //0 empty
        //202  request
        //203 wait for $second
        //419 no access
        // 303 cacle
        return ['code' => $code, 'data' => $data, 'msg' => $msg];
    }

    // pwdhashed
    public function checkuser(array $data)
    {
        $http = new Client;
        $response = $http->post($this->urlforserverapi . '/api/checkuser', [ //replace url with $this->urlforserver
            'form_params' => [
                'user_email' => $data['email'],
            ],
        ]);
        $accessdata = json_decode((string) $response->getBody(), true);
        if ($accessdata['code'] == 0) {
            return $this->returncode(0, '', 'empty');
        } else {
            return $this->returncode(200, '', 'success');
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
            $response = $http->post($this->urlforserverapi . '/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => '2',
                    'client_secret' => 'n7ZrJ7VGv4b6QuQjZ1AKWZ4w4AuvX88JuxzlPjGu',
                    'username' => Auth::user()->email,
                    'password' => $dehashed,
                    'scope' => '',
                ],
            ]);
            $accessdata = json_decode((string) $response->getBody(), true);
            $date = date('Y-m-d');
            $check = access_token::where([['created_at', 'like', '%' . $date . '%'], ['user_id', '=', '' . $id . '']])->get()->count();
            if ($check < 1) {
                access_token::create([
                    'user_id' =>  $id,
                    'access_token' => $accessdata['access_token']
                ]);
            }
            // return ['token'=>$accessdata['access_token']];
            return $this->returncode(200, $accessdata, 'empty');
        } else {
            return $this->returncode(0, '', 'empty');
        }
    }
    public function transfertoapi(Request $req)
    {
        try {
            $userid = Auth::user()->pro_id . '_' . Auth::user()->user_id;
            $http = new Client;


            $userbl = Auth::user()->userBalance;
            if ($req->amount > $userbl || $req->amount == 0) {
                return $this->returncode(99, '', 'not enough money minimum at 100'); //not enough
            } else {

                $header = getfunction::header();

                $formdata = [
                    'amount' => $req->amount,
                    'user_id' => $userid,
                ];

                $response = $http->get(Cache::get('mainUrl') . '/api/transfermoney/' . $userid . '/' . $req->amount, [ //replace url with $this->urlforserver
                    'headers' => $header,
                ]);
                $accessdata = json_decode((string) $response->getBody(), true);
                if ($accessdata['code'] == 200) {
                    DB::enableQueryLog(); // Enable query log
                    $qr = DB::UPDATE('UPDATE users SET userBalance = userBalance - ' . $req->amount . ' WHERE user_id ="' . Auth::user()->user_id . '"');
                    if ($qr) {
                        return $this->returncode($accessdata['code'], $accessdata['data'], $accessdata['msg']);
                    } else {
                        return $this->returncode(300, '', DB::getQueryLog()); //query error
                    }
                } else {
                    return $this->returncode($accessdata['code'], $accessdata['data'], $accessdata['msg']); //empty
                }
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //empty
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





    public function payment()
    {
        return "HELLO THIS PAYMENT FUNCTION";
    }

    public function updatemoney(Request $req)
    {
        // $balnce = 900000;
        // $id = $req;
        // User::where('id',''.$id.'')->update(['userBalance'=>$balnce]);
    }
    public function userdetaildata()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            $date = date('Y-m-d');
            return DB::table('users')->where('id', $id)
                ->orderby('created_at', 'desc')->limit(1)->get();
        }
    }

    public function trackuserLogin($id)
    {
        $getTrackUser = access_record::where('user_id', '=', '' . $id . '')->get();
        return $getTrackUser;
    }


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
    public function getUserBet()
    {

        $update  = userdetail::where('user_id', Auth::user()->user_id)->get();
        $Totalbet = $update->pluck('Totalbet')[0];
        $rolling = Selfservice::where('Amount', '<=', $Totalbet)->limit(1)->orderby('Amount', 'desc')->get();
        $per = Selfservice::all();
        foreach ($rolling as $rl) {
            $res = ($Totalbet * $rl->percentage) / 100;
            $ud = userdetail::where('user_id', Auth::user()->user_id)->update(['TotalRolling' => $res, 'AvailableRolling' => $res]);
        }
        return ['totalbet' => $Totalbet, $per, $update];
        // return $rolling;
        // foreach($per as $p){
        //     return DB::select('SELECT Amount,level,title,(percentage * '.$Totalbet.') / 100 as persc FROM selfservices ' );
        // }




    }
    public static function getRolling()
    {
        $roll_his = Rolling_history::where('user_id', Auth::user()->user_id)->latest()->limit(1)->get();
        $all_rolling_history_value = Rolling_history::where([['user_id', Auth::user()->user_id], ['status', 'not pay']])->get()->sum('amount');
        $last_total_bet = $roll_his->pluck('last_totalbet');
        if ($last_total_bet->count() > 0) {
            $last_total_bet =   $last_total_bet[0];
        } else {
            $last_total_bet = 0;
        }
        $user_detail = userdetail::where('user_id', Auth::user()->user_id)->get();
        $total_bet   =  $user_detail->pluck('Totalbet')[0];
        $avaiable_bet = $total_bet - $last_total_bet;

        $percent = Selfservice::where('Amount', '<=', $total_bet)->limit(1)->get()->pluck('percentage')[0];
        $avaiable_rolling = ($avaiable_bet * $percent) / 100;
        $all_rolling_history_value = $all_rolling_history_value + $avaiable_rolling;
        return response()->json([
            array(
                'totalbet' => $total_bet,
                'available_rolling' => $avaiable_rolling,
                'total_rolling' => $all_rolling_history_value
            )
        ]);
    }
}
