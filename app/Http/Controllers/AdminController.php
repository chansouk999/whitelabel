<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Eventhistory;
use Exception;
use App\Request as Reqst;
use App\access_token;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\json_decode;
use App\Agent;
use App\AgenTransaction;
use App\Shareholder;
class AdminController extends Controller
{
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
    public function getshareholder(Request $req){
        try{
            $data = Shareholder::orderby('created_at','desc')->paginate(20);
            if($data){
                return $this->returncode(200, $data, 'success');
            }else{
                return $this->returncode(300, $data, DB::getQueryLog()); 
            }
        }catch(\Exception $ex){
            return $this->returncode(500, '', $ex->getMessage());
        }
    }

    public function savetransfer(Request $req){
        try{
            DB::enableQueryLog();
            $insertdata = array(
                'Time'=>date('Y-m-d H:i:s'),
                'agentId'=>$req->agentid,
                'amount'=>$req->amount,
                'currency'=>$req->currency,
                'methodId'=>0,
                'assitid'=>Auth::user()->id,
                'reference'=>strtotime('now').date('ymd'),
            );
            $save = AgenTransaction::create($insertdata);
            if($save){
                return $this->returncode(200, $save, 'success');
            }else{
                return $this->returncode(300, $save, DB::getQueryLog()); 
            }
        }catch(\Exception $ex){
            return $this->returncode(500, '', $ex->getMessage());
        }
    }

    public function saveshareholder(Request $req){
        try{
            DB::enableQueryLog();
            $insertdata = array(
                'share_id'=>strtotime('now'),
                'name'=>$req->shareholdername,
                'accessPermission'=>$req->shareholderpermision,
            );
            $save = Shareholder::create($insertdata);
            if($save){
                return $this->returncode(200, $save, 'success');
            }else{
                return $this->returncode(300, $save, DB::getQueryLog()); 
            }
        }catch(\Exception $ex){
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getagentinfo(Request $req){
        try{
            $data = Agent::orderby('created_at','desc')->paginate(20);
            if($data){
                return $this->returncode(200, $data, 'success');
            }else{
                return $this->returncode(300, $data, DB::getQueryLog()); 
            }
        }catch(\Exception $ex){
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getagentid(){
        $agent = Agent::all();
        $serial = $agent->count();
        $agentid = $serial.Auth::user()->id;
        return $agentid;
    }
    public function saveagent(Request $req){
        try{
            DB::enableQueryLog();
            $insertdata = array(
                'agentId'=>$this->getagentid(),
                'typeId'=>100,
                'joinTime'=>date('Y-m-d H:i:s'),
                'numberPlayer'=>0,
                'subAgent'=>0,
                'balance'=>0,
                'percentage'=>0,
                'totalIncome'=>0,
                'name'=>$req->agentname,
                'bankAccount'=>$req->agentbankacc,
                'province'=>$req->agentprovince,
                'city'=>$req->agentcity,
                'branch'=>$req->agentbranch,
            );
            $save =Agent::create($insertdata);
            if($save){
                return $this->returncode(200, $save, 'success');
            }else{
                return $this->returncode(300, $save, DB::getQueryLog()); 
            }
        }catch(\Exception $ex){
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
    public function viewuser($id){
        try{
            DB::enableQueryLog();
            $getuser = User::where('user_id','=',''.$id.'')->get();
            if ($getuser) {
                return $this->returncode(200, $getuser, 'success');
            } else {
                return $this->returncode(300, $getuser, DB::getQueryLog());
            }
        }catch(\Exception $ex){
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getevnthistory(){
        try{
            DB::enableQueryLog();
            $eventhisotry = Eventhistory::orderby('created_at','desc')->paginate(20);
            if ($eventhisotry) {
                return $this->returncode(200, $eventhisotry, 'success');
            } else {
                return $this->returncode(300, $eventhisotry, DB::getQueryLog());
            }
        }catch(\Exception $ex){
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    // public function withtop($)
    public function getwithdrwaid($data){
        try{
            $date =date('Ymd');
            $serial = Eventhistory::all();
            $count = $serial->count();
            $id = $count.'88'.$data.$date;
            return $this->returncode(200, $id, 'success');
        }catch(\Exception $ex){
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
                if($reqdata['requestDetail']=='topup'){
                    $evnt = $userbl + $reqdata['amount'];$e = '+';
                    $wtid = strtotime('now');
                }
                if($reqdata['requestDetail']=='Withdraw'){
                    $evnt = $userbl - $reqdata['amount'];$e = '-';
                    $wtid = $this->getwithdrwaid($reqdata['amount'])['data'];
                }
                // $data\
                // return $evnt;
                $cc = ',"method":"'.$reqdata['method'].'"}';
                $datacc= str_replace('}',$cc,$reqdata['detail']);
                $insertdata = array(
                    'Time' => date('Y-m-d H:i:s'),
                    'user_id' => $reqdata['userId'],
                    'event' => $reqdata['requestDetail'],
                    'reference' => $wtid,
                    'balance_before_event' => $userbl,
                    'amount' => $reqdata['amount'],
                    'balance_after_event' =>$evnt ,
                    'deatil' => $datacc,
                    'served_by' => Auth::user()->user_id,
                );
                $save = Eventhistory::create($insertdata); //DB::getQueryLog()
                if ($save) {
                    $del = Reqst::where('id', '=', $req->id)->delete();
                    $userupdate = User::where('user_id', '=', '' . $reqdata['userId'] . '')->update(['userBalance'=>$evnt]);
                    if ($del && $userupdate) {
                        return $this->returncode(200, '', 'success');
                    } else {
                        return $this->returncode(300, '', DB::getQueryLog());
                    }
                } else {
                    return $this->returncode(300, $save, DB::getQueryLog());
                }
            } 
            if($req->code==303) {//deny
                return $this->denyreq($req->id);
            }
            if($req->code==202){
                return $this->viewuser($req->userid);
            }
            if($req->code==777){
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
