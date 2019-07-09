<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client;
use App\ImageTransfer;
use App\Http\Controllers\ActivityLogController as ActivityLog;
use App\Eventhistory;
use Exception;
use App\activityLog as modelog;
use App\Request as Reqst;
use App\Admin;
use App\access_token;
use Illuminate\Support\Facades\DB;
use App\admin_access;
use App\Agent;
use App\AgenTransaction;
use App\Shareholder;

class AdminController extends Controller
{
    protected $urlserver = 'http://lec68.com';
    protected $url8003 = 'http://localhost:8003';


    public function __construct()
    {
        $this->middleware('auth:administrator');
    }

    public function getadmininfotimeline()
    {
        try {
            $adminid = Auth::guard('administrator')->user()->id;
            $dataall = modelog::where('method', 'Adminrecord')->get();
            $datamy = modelog::where([['method', 'Adminrecord'], ['detail', 'like', '%"serveby":' . $adminid . '%']])->get();
            if ($datamy && $dataall) {
                return $this->returncode(200, ['my' => $datamy, 'all' => $dataall], 'success');
            } else {
                return $this->returncode(300, ['my' => $datamy, 'all' => $dataall], DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }



    public function getallresultadmin()
    {
        try {
            $header = $this->getcleanheader(Cache::get('webToken'));
            $http = new Client;
            $response = $http->get(Cache::get('mainUrl') . '/api/getallresultadmin', ['headers' => $header]);
            $accessdata = json_decode((string) $response->getBody(), true);
            return $accessdata;
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }

    public function getcleanheader($token)
    {
        $header = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $token
        ];
        return $header;
    }
    public function index()
    {
        return view('auth.admin_login');
    }
    public function getheader($user_id)
    {
        $header = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . Cache::get('webToken')
        ];
        return $header;
    }








    /////////////////////////////////////  SAVE TOEKN REFRESFED
    public function savenewtoken($acctoken)
    {
        Cache::put('webToken', $acctoken, 3714568);
    }
    public function getlog(Request $req)
    {
        try {
            $data = modelog::where('method', '=', 'Playerrecord')->orderby('created_at', 'desc')->paginate(10000);
            if ($data) {
                return $this->returncode(200, $data, 'success');
            } else {
                return $this->returncode(300, $data, DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getfreshtoken()
    {
        $http = new Client;
        $response = $http->post(Cache::get('mainUrl') . '/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'n7ZrJ7VGv4b6QuQjZ1AKWZ4w4AuvX88JuxzlPjGu',
                'username' => Auth::user()->email,
                'password' => $this->deashed(),
                'scope' => '',
            ],
        ]);
        $accessdata = json_decode((string) $response->getBody(), true);
        $this->savenewtoken($accessdata);
        return ['token' => $accessdata['access_token']];
    }
    public function deashed()
    {
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
        return $dehashed;
    }

    ////////////////////  SAVE TOEKN REFRESFED










    // try{
    //     if ($data) {
    //         return $this->returncode(200, $data, 'success');
    //     } else {
    //         return $this->returncode(300, $data, DB::getQueryLog());
    //     }
    // }catch(\Exception $ex){
    //     return $this->returncode(500, '', $ex->getMessage());
    // }



    public function getuserdetaildta($userid)
    {

        try {
            $user_id = explode('_', $userid);
            if (array_key_exists(1, $user_id)) {
                $useridex = $user_id[1];
            } else {
                $useridex = $userid;
            }
            $data = DB::table('users')
                ->join('userdetails', 'users.id', '=', 'userdetails.id')
                ->where('users.user_id', 'like', '%' . $useridex . '%')
                ->orwhere('users.name', 'like', '%' . $useridex . '%')
                ->get();
            if ($data) {
                return $this->returncode(200, $data, 'success');
            } else {
                return $this->returncode(300, $data, DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }

    public function gettopuphis($userid, $event)
    {
        try {

            $data = Eventhistory::where([['user_id', 'like', '%' . $userid . '%'], ['event', 'like', '' . $event . '']])->latest()->get();
            if ($data) {
                return $this->returncode(200, $data, 'success');
            } else {
                return $this->returncode(300, $data, DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getgamehistory(Request $req)
    {
        try {
            $method = $req->reqmethod;
            $user_id = $req->user_id;
            $header = [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . Cache::get('webToken')
            ];

            // return $req;

            $http = new Client;
            if ($method == 'game') {
                $response = $http->post(Cache::get('mainUrl') . '/api/requestuserdata', [
                    'form_params' => [
                        'method' => $req->reqmethod,
                        'user_id' => $user_id,
                        'name' => $req->name,
                    ], 'headers' => $header
                ]);
                $accessdata = json_decode((string) $response->getBody(), true);
                return $this->returncode(200, $accessdata['data'], 'success');
            }
            //             viewuser
            // viewgameresult
            if ($method == 'topup') {
                return $this->gettopuphis($user_id, $event = 'topup');
            }
            if ($method == 'withdraw') {
                return $this->gettopuphis($user_id, $event = 'Withdraw');
            }
            if ($method == 'access') { }
            if ($method == 'action') { }
            if ($method == 'viewgameuser') {
                return $this->getbetdataid($method, $user_id, $header);
            }
            if ($method == 'viewuser') {
                return $this->getuserdetaildta($user_id);
            }

            if ($method == 'viewgameresult') {
                return $this->getgameresult($method, $req->name, $header);
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getbetdataid($method, $gmaeid, $header)
    {
        try {
            $http = new Client;
            $response = $http->post(Cache::get('mainUrl') . '/api/requestuserdata', [
                'form_params' => [
                    'method' => $method,
                    'gameid' => $gmaeid,
                ], 'headers' => $header
            ]);
            $accessdata = json_decode((string) $response->getBody(), true);
            return $this->returncode(200, $accessdata['data'], 'success');
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getgameresult($method, $gmaeid, $header)
    {
        try {
            $http = new Client;
            $response = $http->post(Cache::get('mainUrl') . '/api/requestuserdata', [
                'form_params' => [
                    'method' => $method,
                    'gameid' => $gmaeid,
                ], 'headers' => $header
            ]);
            $accessdata = json_decode((string) $response->getBody(), true);
            return $this->returncode(200, $accessdata['data'], 'success');
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
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
        // 777 manage
        return ['code' => $code, 'data' => $data, 'msg' => $msg];
    }
    public function getshareholder(Request $req)
    {
        try {
            $data = Shareholder::orderby('created_at', 'desc')->paginate(20);
            if ($data) {
                return $this->returncode(200, $data, 'success');
            } else {
                return $this->returncode(300, $data, DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function agenttransaction(Request $req)
    {
        try {
            $data = AgenTransaction::orderby('created_at', 'desc')->paginate(20);
            if ($data) {
                return $this->returncode(200, $data, 'success');
            } else {
                return $this->returncode(300, $data, DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function savetransfer(Request $req)
    {
        try {
            DB::enableQueryLog();
            $insertdata = array(
                'Time' => date('Y-m-d H:i:s'),
                'agentId' => $req->agentid,
                'amount' => $req->amount,
                'currency' => $req->currency,
                'methodId' => $req->methodid,
                'assitid' => Auth::guard('administrator')->user()->id,
                'reference' => strtotime('now') . date('ymd'),
            );
            $save = AgenTransaction::create($insertdata);
            if ($save) {
                return $this->returncode(200, $save, 'success');
            } else {
                return $this->returncode(300, $save, DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }

    public function saveshareholder(Request $req)
    {
        try {
            DB::enableQueryLog();
            $insertdata = array(
                'share_id' => strtotime('now'),
                'name' => $req->shareholdername,
                'accessPermission' => $req->shareholderpermision,
            );
            $save = Shareholder::create($insertdata);
            if ($save) {
                return $this->returncode(200, $save, 'success');
            } else {
                return $this->returncode(300, $save, DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getagentinfo(Request $req)
    {
        try {
            $data = Agent::orderby('created_at', 'desc')->paginate(20);
            if ($data) {
                return $this->returncode(200, $data, 'success');
            } else {
                return $this->returncode(300, $data, DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getagentid()
    {
        $agent = Agent::all();
        $serial = $agent->count();
        $agentid = $serial . Auth::guard('administrator')->user()->id;
        return $agentid;
    }
    public function saveagent(Request $req)
    {
        try {
            DB::enableQueryLog();
            $insertdata = array(
                'agentId' => $this->getagentid(),
                'typeId' => 100,
                'joinTime' => date('Y-m-d H:i:s'),
                'numberPlayer' => 0,
                'subAgent' => 0,
                'balance' => 0,
                'percentage' => $req->percentage,
                'totalIncome' => 0,
                'name' => $req->agentname,
                'bankAccount' => $req->agentbankacc,
                'province' => $req->agentprovince,
                'city' => $req->agentcity,
                'branch' => $req->agentbranch,
            );
            $save = Agent::create($insertdata);
            if ($save) {
                $method = 'Adminrecord';
                $data = array(
                    'user_id' => $this->getagentid(),
                    'event' => 'Create new Agent',
                    'serveby' => Auth::guard('administrator')->user()->id,
                    'amount' => '',
                    'eventid' => '',
                    'Time' => date('Y-m-d'),
                );
                $Log = new ActivityLog();
                $Log->storeLog($method, $data);
                return $this->returncode(200, $save, 'success');
            } else {
                return $this->returncode(300, $save, DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function denyreq($id, $userid, $msglog, $reqdata)
    {
        try {
            DB::enableQueryLog();
            $del = Reqst::where('id', '=', $id)->delete();
            if ($del) {
                $method = 'Adminrecord';
                $data = array(
                    'user_id' => $userid,
                    'event' => $msglog,
                    'serveby' => Auth::guard('administrator')->user()->id,
                    'amount' => $reqdata['amount'],
                    'eventid' => '',
                    'Time' => date('Y-m-d'),
                );
                $Log = new ActivityLog();
                $Log->storeLog($method, $data);
                return $this->returncode(200, $del, 'success');
            } else {
                return $this->returncode(300, $del, DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function viewuser($id)
    {
        try {
            DB::enableQueryLog();
            // $getuser = User::where('user_id', '=', '' . $id . '')->get();
            $getuser = DB::table('users')
                ->join('userdetails', 'users.user_id', '=', 'userdetails.user_id')
                ->where('users.user_id', '=', '' . $id . '')
                ->get();

            if ($getuser) {
                return $this->returncode(200, $getuser, 'success');
            } else {
                return $this->returncode(300, $getuser, DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getevnthistory()
    {
        try {
            DB::enableQueryLog();
            $eventhisotry = Eventhistory::orderby('created_at', 'desc')->paginate(20);
            if ($eventhisotry) {
                return $this->returncode(200, $eventhisotry, 'success');
            } else {
                return $this->returncode(300, $eventhisotry, DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    // public function withtop($)
    public function getwithdrwaid($data)
    {
        try {
            $date = date('Ymd');
            $serial = Eventhistory::all();
            $count = $serial->count();
            $id = $count . '88' . $data . $date;
            return $this->returncode(200, $id, 'success');
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function actionprocess(Request $req)
    {
        try {
            DB::enableQueryLog();
            $reqdata = Reqst::where('id', '=', $req->id)->get()[0];
            $userbl = User::where('user_id', '=', '' . $reqdata['userId'] . '')->get()->pluck('userBalance')[0];
            $detail = json_decode($reqdata['detail'], true);
            if ($reqdata['requestDetail'] == 'topup') {
                $evnt = $userbl + $reqdata['amount'];
                $msgreqlog = 'Top up request Approved by';
                $msgreqlogdeny = ' Deny Top up request of user';
                $e = '+';
                $wtid = strtotime('now');
            }
            if ($reqdata['requestDetail'] == 'Withdraw') {
                $evnt = $userbl - $reqdata['amount'];
                $msgreqlog = 'Withdraw request Approved by';
                $msgreqlogdeny = ' Deny Withdraw request of user';
                $e = '-';
                $wtid = $this->getwithdrwaid($reqdata['amount'])['data'];
            }
            if ($req->code == 200) {
                // $data\
                // return $evnt;
                $cc = ',"method":"' . $reqdata['method'] . '"}';
                $datacc = str_replace('}', $cc, $reqdata['detail']);
                $insertdata = array(
                    'Time' => date('Y-m-d H:i:s'),
                    'user_id' => $reqdata['userId'],
                    'event' => $reqdata['requestDetail'],
                    'reference' => $wtid,
                    'balance_before_event' => $userbl,
                    'amount' => $reqdata['amount'],
                    'balance_after_event' => $evnt,
                    'deatil' => $datacc,
                    'served_by' => Auth::guard('administrator')->user()->id,
                );
                $save = Eventhistory::create($insertdata); //DB::getQueryLog()
                if ($save) {
                    $del = Reqst::where('id', '=', $req->id)->delete();
                    $userupdate = User::where('user_id', '=', '' . $reqdata['userId'] . '')->update(['userBalance' => $evnt]);
                    if ($del && $userupdate) {


                        $method = 'Adminrecord';
                        $data = array(
                            'user_id' => $reqdata['userId'],
                            'event' => $msgreqlog,
                            'serveby' => Auth::guard('administrator')->user()->id,
                            'amount' => $reqdata['amount'],
                            'eventid' => '',
                            'Time' => date('Y-m-d'),
                        );
                        $Log = new ActivityLog();
                        $Log->storeLog($method, $data);


                        return $this->returncode(200, '', 'success');
                    } else {
                        return $this->returncode(300, '', DB::getQueryLog());
                    }
                } else {
                    return $this->returncode(300, $save, DB::getQueryLog());
                }
            }
            if ($req->code == 303) { //deny
                return $this->denyreq($req->id, $req->userid, $msgreqlogdeny, $reqdata);
            }
            if ($req->code == 202) {
                return $this->viewuser($req->userid);
            }
            if ($req->code == 777) {
                return $this->viewuser($req->userid);
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function gettoken()
    {
        session(['access_token' => Cache::get('webToken')]);
        return ['token' => Cache::get('webToken')];
    }
    public function getuserdata(Request $req)
    {
        $data = $req->search;
        if ($data !== '') {
            $user = DB::table('users')
                ->join('userdetails', 'users.id', '=', 'userdetails.id')
                ->where('name', 'like', '%' . $data . '%')
                ->orwhere('email', 'like', '%' . $data . '%')
                ->orwhere('userStatus', 'like', '%' . $data . '%')
                ->paginate(20);
            return ['userdata' => $user];
        } else {
            $user = DB::table('users')
                ->join('userdetails', 'users.id', '=', 'userdetails.id')
                ->paginate(20);
            return ['userdata' => $user];
        }
    }
    public function getreuest(Request $req)
    {
        $data = Reqst::orderby('created_at', 'desc')->paginate(20);
        return ['data' => $data];
    }










    public function uploadsave(Request $r)
    {
        // $adminid = Auth::user()->id;
        // $date = date('ymdHis');
        // $datetime = date('ymdHis');
        try {
            DB::enableQueryLog();
            $UID = $r->agentid;
            $referid = $r->refer;
            $namesave = $r->name;
            $path = "evidence/";
            $dir = public_path("evidence/");
            // $imgaeid = $UID . $adminid . $date;
            if ($r->img) {
                if (!\File::isDirectory($dir)) {
                    mkdir($dir, 666, true);
                }
                $image = $r->img[0];
                $name = time() . '.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
                $namecheck = explode('.', $name);
                $filetype = $namecheck[1];
                \Image::make($image)->save(public_path($path) . $name);
            }
            $save = ImageTransfer::create(
                [
                    'agent_id' => $UID,
                    'imgid' => strtotime('now'),
                    'imgname' => $name,
                    'refer' => $referid
                ]
            );
            if ($save) {
                return $this->returncode(200, '', 'success');
            } else {
                return $this->returncode(300, '', DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
        // $ev = new Evidence;
        // $ev->transferImage = $namesave;
        // $ev->imageName = $UID . $name;
        // $ev->imageID = $imgaeid;
        // $ev->imageDiscription = 'null';
        // $ev->uploadTime = $datetime;
        // $ev->transfer_id = $UID;
        // $ev->save();
        // if ($ev == true) {
        //     return ['success' => 'success'];
        // } else {
        //     return ['success' => 'false'];
        // }


        
        // return $r->img[0];
    }
    public function getimgtrans($id)
    {
        try {
            DB::enableQueryLog();
            $data = ImageTransfer::where('refer', $id)->paginate(100);
            if ($data) {
                return $this->returncode(200, $data, 'success');
            } else {
                return $this->returncode(300, '', DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }

    public function delete_img($id)
    {
        try {
            $gotname = ImageTransfer::where('id', '=', $id)->get()->pluck('imgname')[0];
            $path = "evidence/" . $gotname;
            $evi = ImageTransfer::where('id', '=', $id)->delete();
            unlink($path);
            return $this->returncode(200, '', 'success');
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getadmininfo()
    {
        try {

            $id = Auth::guard('administrator')->user()->id;

            $data = DB::table('admins')
                ->join('admin_accesses', 'admins.id', '=', 'admin_accesses.admin_id')
                ->where('admins.id', '=', $id)
                ->get();
            $data1 = DB::table('admins')
                ->join('admin_accesses', 'admins.id', '=', 'admin_accesses.admin_id')
                ->paginate(1000);

            if ($data) {
                return $this->returncode(200, ['auth' => $data, 'all' => $data1], 'success');
            } else {
                return $this->returncode(300, '', DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function checkQuery($save){
        try{
            DB::enableQueryLog();
            if ($save) {
                return $this->returncode(200, $save, 'success');
            } else {
                return $this->returncode(300, '', DB::getQueryLog());
            }
        }catch(\Exception $ex){
            return $this->returncode(500, '', $ex->getMessage());
        }
       
    }
    public function addnewadmin(Request $req)
    {
        // admin_access
        try {
            DB::enableQueryLog();
            if ($req->admintype == 'normal') {
                $req->admintype = 1;
            } else {
                $req->admintype = 0;
            }
            $id = substr(strtotime('now'), -5, 5);
            $resid = $id . Admin::count() + 1;

            $insertdata0 = array(
                'id' => $resid,
                'name' => $req->addnewadminder,
                'email' => $req->addnewadminder,
                'password' => Hash::make($req->addnewpassword),
                'TotalOnline' => 0,
                'active' => 0,
                'role_id' => $req->admintype

            );
            $save = Admin::create($insertdata0);
            $insertdata1 = array(
                'admin_id' => $resid,
                'Player' => $req->r_player,
                'Gameble' => $req->gamble,
                'Gameresult' => $req->r_gameresult,
                'Withdraw_topup' => $req->r_withtop,
                'Timeline' => $req->r_timeline,
                'playerrecord' => $req->r_playerrecord,
                'agentInfo' => $req->r_agentinfo,
                'SHinfo' => $req->r_shinfo,
                'agenttransaction' => $req->r_agenttstion,
                'Request' => $req->r_request,
                'Anouncement' => $req->r_announcement,
                'ManageRecord' => $req->r_managerecord,
                'SelfRolling' => $req->r_selfrolling
            );
            $save = admin_access::create($insertdata1);


            if ($save) {
                return $this->returncode(200, $save, 'success');
            } else {
                return $this->returncode(300, '', DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function insertadmin()
    { }
    public function getannounce($m1,$m2){
        try{
            $data = Announcement::where([['method','=',$m1],['message','like','%"type":"'.$m2.'%']])->orderby('created_at','desc')->get();
            return $this->checkQuery($data);
           
        }catch(\Exception $ex){
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function saveannounce(Request $req)
    {
        try {
            $id = Announcement::count() + 1;
            $msg = array(
                'title'=>$req->title,
                'msg'=>$req->message,
                'type'=>$req->typeAN
            );
            $message = array(
                'AnouncementID'=>$req->method.$id,
                'method'=>$req->method,
                'message'=>json_encode($msg),
                'addInDate'=>date('Y-m-d H:i:s'),
            );
           
            $save = Announcement::create($message);
            $res = $this->checkQuery($save);
            return $res;
            
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
}
