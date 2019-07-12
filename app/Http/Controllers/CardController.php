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
use App\Http\Controllers\ActivityLogController as ActivityLogder;
use App\withdraw_methods;
use App\access_record;
use App\userdetail;
use DateTime;
use App\AcceessIP;
use App\activityLog;
use Exception;
use App\Selfservice;
use App\Announcement;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\Environment\Console;
// use League\Flysystem\Exception;
class CardController extends Controller
{
    public function getcardinfo()
    {
        try {
            $data = withdraw_methods::orderby('created_at', 'asc')->get();
            if ($data) {
                return $this->returncode(200, $data, 'success');
            } else {
                return $this->returncode(300, '', DB::getQueryLog()); //query error
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //internal server eeror
        }
    }
    // Vong Create add Card
    public function addcard(Request $request)
    {
        try {
            $update = array(
                'desc' => $request->desc,
                'userName' => $request->name,
                'bankAccount' => $request->cardnumber,
                'methodId' => $request->bankAccount,
                'registerProvince' => $request->province,
                'registerCity' => $request->city,
                'branch' => $request->branch,
                'user_id' => Auth::user()->user_id
                // forbank
            );
            // return $update;
            DB::enableQueryLog();
            $code = $request->code;
            $check =  withdraw_methods::where('bankAccount', '=', '' . $update['bankAccount'] . '')->get()->count();
            if ($check > 0) {
                return $this->returncode(100, 'No data', 'aleady exist');
            } else {
                $save = withdraw_methods::create($update);
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
    public function ShowCardUse()
    {
        try {
            $data = withdraw_methods::where('status', '=', 'use')->get();
            if ($data) {
                return $this->returncode(200, $data, 'success');
            } else {
                return $this->returncode(300, '', DB::getQueryLog()); //query error
            }
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
    public function CardDelete($id)
    {
        $deleteCard = withdraw_methods::find($id)->delete();
        //   dd($deleteCard);
    }

    public function useCard(Request $request)
    {
        DB::enableQueryLog();
        $updateData = withdraw_methods::where('status', '=', 'use')->update(['status' => 'not use']);
        $request = withdraw_methods::where('id', '=', $request->id)->update(['status' => 'use']);
        if ($request) {
            return $this->returncode(200, 'No data', 'success');
        } else {
            return $this->returncode(300, '', DB::getQueryLog()); //query error
        }
    }
    public function trackuserLogin($id)
    {
        $getTrackUser = access_record::where('user_id', '=', '' . $id . '')->get();
        return $getTrackUser;
    }
    public function getuserdetail()
    {
        $user_id = Auth::user()->user_id;
        $getuserdetail = userdetail::where('user_id', '=', '' . $user_id . '')->get();
        return $getuserdetail;
    }
    public function getPlayerRecord()
    {
        $playerRecoard  = Auth::user()->user_id;
        $getuserdetail = activityLog::where('detail', 'like', '%user_id":"' . $playerRecoard . '%')->get();
        return $getuserdetail;
    }
    public function ActionRecord($id)
    {
        $actionRecord  = Auth::user()->user_id;
        $actionRecordDetail = activityLog::where('detail', 'like', '%user_id":"' . $id . '%')->get();
        return $actionRecordDetail;
    }
    public function Selfservice()
    {
        $getSelfservice = Selfservice::all();
        return $getSelfservice;
    }


    public function editlevel($id)
    {
        $editlevel  = Selfservice::where('id', '=', '' . $id . '')->get();
        return $editlevel;
    }

    public function saveLavel(Request $request)
    {
        // return $request;
        try {
            DB::enableQueryLog();
            $insertData = array(
                'title' => $request->title,
                'level' => $request->level,
                'Amount' => $request->amount,
                'percentage' => $request->percentage,
            );
            if ($request->medthod == 'insert') {
                $Savedata = Selfservice::create($insertData);
            } else {
                $Savedata = Selfservice::where('id', '=', $request->id)->update($insertData);
            }
            if ($Savedata) {
                return $this->returncode(200, 'No data', 'success');
            } else {
                return $this->returncode(300, '', DB::getQueryLog()); //query error
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //Internal erro
        }
    }
    public function deleteLevel($id)
    {
        $deleteLevel = Selfservice::find($id)->delete();
        //   dd($deleteCard);
    }
    public function getRequets()
    {
        $rq  = Auth::user()->user_id;
        $Getdata = Reqst::where('userId', '=', $rq)->get();
        return $Getdata;
    }
    public function getDate(Request $date)
    {
        $tabs = $date->tab;
        if ($tabs == 'withdraw') {
            $from = Reqst::whereBetween('created_at', [$date->fristdate, $date->secound])
                ->where('requestDetail', '=', 'Withdraw')->get();
            return ['method' => 'Withdraw', "Data" => $from];
        } else {
            $from = Reqst::whereBetween('created_at', [$date->fristdate, $date->secound])
                ->where('requestDetail', '=', 'topup')->get();
            return ['method' => 'Rechange', "Data" => $from];
        }
    }

    public function GetuserAccessip()
    {
        try {
            DB::enableQueryLog();
            $userip = array(
                'ip' => \Request::getClientIp(),
            );
            $save = AcceessIP::create($userip);
            if ($save == true) {
                return $save;
            } else {
                return "NOT GET IP";
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function TaguserDetail()
    {
        $getTagUser = User::get();
        return $getTagUser;
    }
    public function Savveselfservice(Request $request)
    {
        try {
            DB::enableQueryLog();
            if ($request->availabel <= 0) {
                return $this->returncode(99, $request->availabel, 'Not enough');
            }
            $updataSelf = userdetail::where('user_id', '=', $request->userid)->update(['AvailableRolling' => 0]);
            if ($updataSelf) {
                $method = 'Playerrecord';
                $data = array(
                    'user_id' => $request->userid,
                    'event' => 'Withdraw Rolling',
                    'serveby' => '',
                    'amount' => $request->availabel,
                    'eventid' => '',
                    'Time' => date('Y-m-d'),
                );
                $Log = new ActivityLogder();
                $Log->storeLog($method, $data);
                return $this->returncode(200, $data, 'success');
            } else {
                return $this->returncode(300, $data, DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //Internal erro
        }
    }
    public function getaccountment()
    {
        $getdata = Announcement::get();
        return $getdata;
    }
}
