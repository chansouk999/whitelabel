<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use GuzzleHttp\Client;
use App\Http\Controllers\ActivityLogController as ActivityLog;
use App\Eventhistory;
use Exception;
use App\activityLog as modelog;
use App\Request as Reqst;
use App\access_token;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\json_decode;
use App\Agent;
use App\AgenTransaction;
use App\Shareholder;

class AdminController extends Controller
{
    protected $urlserver = 'http://lec68.com';
    protected $url8003 = 'http://localhost:8003';
    public function getheader($user_id)
    {
        $gettoken = trim(access_token::where('user_id', 'like', '%' . $user_id . '%')->orderby('created_at', 'desc')->limit(1)->get()->pluck('access_token'), '["]');
        $header = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $gettoken
        ];
        return $header;
    }








    /////////////////////////////////////  SAVE TOEKN REFRESFED
    public function savenewtoken($user_id, $acctoken)
    {
        $date = date('y-m-d');
        $check = access_token::where([['created_at', 'like', '%' . $date . '%'], ['user_id', '=', '' . $user_id . '']])->get()->count();
        if ($check < 1) {
            access_token::create([
                'user_id' => $user_id,
                'access_token' => $acctoken
            ]);
        }
    }
    public function getlog(Request $req)
    {
        try {
            $data = modelog::where('method', '=', 'Playerrecord')->orderby('created_at', 'desc')->paginate();
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
        $response = $http->post('http://localhost:8003/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'n7ZrJ7VGv4b6QuQjZ1AKWZ4w4AuvX88JuxzlPjGu',
                'username' => Auth::user()->email,
                'password' => $this->deashed(),
                'scope' => '',
            ],
        ]);
        $accessdata = json_decode((string)$response->getBody(), true);
        $this->savenewtoken(Auth::user()->user_id, $accessdata['access_token']);
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
            $gettoken = trim(access_token::where('user_id', 'like', '%' . Auth::user()->user_id . '%')->orderby('created_at', 'desc')->limit(1)->get()->pluck('access_token'), '["]');
            $header = [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $gettoken
            ];
            // return $req;
            $http = new Client;
            if ($method == 'game') {
                $response = $http->post($this->url8003 . '/api/requestuserdata', [
                    'form_params' => [
                        'method' => $req->reqmethod,
                        'user_id' => $user_id,
                        'name' => $req->name,
                    ], 'headers' => $header
                ]);
                $accessdata = json_decode((string)$response->getBody(), true);
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
            $response = $http->post($this->url8003 . '/api/requestuserdata', [
                'form_params' => [
                    'method' => $method,
                    'gameid' => $gmaeid,
                ], 'headers' => $header
            ]);
            $accessdata = json_decode((string)$response->getBody(), true);
            return $this->returncode(200, $accessdata['data'], 'success');
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getgameresult($method, $gmaeid, $header)
    {
        try {
            $http = new Client;
            $response = $http->post($this->url8003 . '/api/requestuserdata', [
                'form_params' => [
                    'method' => $method,
                    'gameid' => $gmaeid,
                ], 'headers' => $header
            ]);
            $accessdata = json_decode((string)$response->getBody(), true);
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
                'assitid' => Auth::user()->id,
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
        $agentid = $serial . Auth::user()->id;
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
                return $this->returncode(200, $save, 'success');
            } else {
                return $this->returncode(300, $save, DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function denyreq($id)
    {
        try {
            DB::enableQueryLog();
            $del = Reqst::where('id', '=', $id)->delete();
            if ($del) {
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
            $getuser = User::where('user_id', '=', '' . $id . '')->get();
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
            if ($req->code == 200) {
                DB::enableQueryLog();
                $reqdata = Reqst::where('id', '=', $req->id)->get()[0];
                $userbl = User::where('user_id', '=', '' . $reqdata['userId'] . '')->get()->pluck('userBalance')[0];
                $detail = json_decode($reqdata['detail'], true);
                if ($reqdata['requestDetail'] == 'topup') {
                    $evnt = $userbl + $reqdata['amount'];
                    $msgreqlog = 'Top up request Approved by';
                    $e = '+';
                    $wtid = strtotime('now');
                }
                if ($reqdata['requestDetail'] == 'Withdraw') {
                    $evnt = $userbl - $reqdata['amount'];
                    $msgreqlog = 'Withdraw request Approved by';
                    $e = '-';
                    $wtid = $this->getwithdrwaid($reqdata['amount'])['data'];
                }
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
                    'served_by' => Auth::user()->user_id,
                );
                $save = Eventhistory::create($insertdata); //DB::getQueryLog()
                if ($save) {
                    $del = Reqst::where('id', '=', $req->id)->delete();
                    $userupdate = User::where('user_id', '=', '' . $reqdata['userId'] . '')->update(['userBalance' => $evnt]);
                    if ($del && $userupdate) {


                        $method = 'Playerrecord';
                        $data = array(
                            'user_id' => $reqdata['userId'],
                            'event' => $msgreqlog,
                            'serveby' => Auth::user()->user_id,
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
                return $this->denyreq($req->id);
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
        $user_id = Auth::user()->user_id;
        $gettoken = trim(access_token::where('user_id', 'like', '%' . $user_id . '%')->orderby('created_at', 'desc')->limit(1)->get()->pluck('access_token'), '["]');
        session(['access_token' => $gettoken]);
        return ['token' => $gettoken];
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
}
