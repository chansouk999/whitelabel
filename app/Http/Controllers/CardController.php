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
use App\Rolling_history;
use App\Admincard;
use App\admincard_rule;

// use League\Flysystem\Exception;
class CardController extends Controller
{
    public function getcardinfo()
    {
        try {
            $userID = Auth::user()->user_id;
            $data = DB::select('SELECT id,userName,
            CONCAT("********", SUBSTRING(bankAccount,-3))
            as bankAccount,registerProvince,
            registerCity,branch,status,user_id,methodId
            from withdraw_methods
            where user_id ="' . $userID . '" ORDER BY created_at DESC ');


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
                'id' => Auth::user()->id,
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
    public function Savveselfservice()
    {
        try {
            DB::enableQueryLog();
            $roll_his = Rolling_history::where('user_id', Auth::user()->user_id)->latest()->limit(1)->get();
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
            if ($avaiable_rolling <= 0) {
                return $this->returncode(99, $avaiable_rolling, 'Not enough');
            }
            $rolling_history =  new Rolling_history;
            $rolling_history->user_id = Auth::user()->user_id;
            $rolling_history->amount =  $avaiable_rolling;
            $rolling_history->last_totalbet = $total_bet;
            $rolling_history->status = "not pay";
            $result = $rolling_history->save();
            return  $result;


            // $updataSelf = userdetail::where('user_id', '=', $request->userid)->update(['AvailableRolling' => 0]);
            // if ($updataSelf) {
            //     $method = 'Playerrecord';
            //     $data = array(
            //         'user_id' => $request->userid,
            //         'event' => 'Withdraw Rolling',
            //         'serveby' => '',
            //         'amount' => $request->availabel,
            //         'eventid' => '',
            //         'Time' => date('Y-m-d'),
            //     );
            //     $Log = new ActivityLogder();
            //     $Log->storeLog($method, $data);
            //     return $this->returncode(200, $data, 'success');
            // } else {
            //     return $this->returncode(300, $data, DB::getQueryLog());
            // }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //Internal erro
        }
    }
    public function getaccountment()
    {
        $userID = Auth::user()->user_id;
        $annoucemen = Announcement::get();
        $getTypePM = Announcement::where('message',  'like', '%"type":"PM"%')->get();
        $getTypeAN = Announcement::where('message',  'like', '%"type":"AN"%')->get();
        $getdata = Announcement::latest()->limit(1)->get()->pluck('userID')[0];
        $getAll = Announcement::where('userID', 'like', '%' . $userID . '%')->get();
        $getmore = Announcement::where([['method', '=', "PA"], ['userID', '=', $getdata]])->get()->count();
        if ($getdata == '"all"') {
            $getall = Announcement::where([['method', '=', "PA"], ['userID', '=', $getdata]])->latest()->limit(1)->get();
        } else {
            $getall = Announcement::where([['method', '=', "PA"], ['userID', 'like', '%' . $userID . '%']])->latest()->limit(1)->get();
        }
        return [$getall, $getmore, $getAll, Auth::user()->name, $annoucemen, $getTypePM, $getTypeAN];
    }
    public function gettype()
    {
        try {
            DB::enableQueryLog();
            $getTypePM = Announcement::where('message',  'like', '%"type":"PM"%')->get();
            $getTypeAN = Announcement::where('message',  'like', '%"type":"AN"%')->get();
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //Internal erro
        }
        return [$getTypePM, $getTypeAN];
    }
    public function read_annocement($id)
    {
        try {
            DB::enableQueryLog();
            $getRead = Announcement::where('AnouncementID',  '=', $id)->get();
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //Internal erro
        }
        return $getRead;
    }
    public function getadminlog($id)
    {
        $getadmindetail = activityLog::where([['detail', 'like', '%user_id":"' . $id . '%'], ['method', '=', 'Adminrecord']])->get();
        return $getadmindetail;
    }
    public function editadmindetail($id)
    {
        try {
            $data = DB::table('admins')
                ->join('admin_accesses', 'admins.id', '=', 'admin_accesses.admin_id')
                ->where('admins.id', '=', $id)
                ->get();
            // return $data;
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function addcardmin(Request $request)
    {
        // return $request;
        try {
            $adminid = Auth::guard('administrator')->user()->id;
            // return $adminid;
            DB::enableQueryLog();
            $address = array(
                'province' => $request->province,
                'city' => $request->city,
            );
            $saveData = array(
                'addedby' => $adminid,
                'bankname' => $request->bankname,
                'bankAccount' => $request->bankAccount,
                'branch' => $request->branch,
                'owner' => $request->owner,
                'rule_id' => $request->Rule,
                'address' => json_encode($address),
            );
            if ($request->method == 1) {
                $getData = Admincard::where('id', $request->gotid)->update($saveData);
            } else {
                $getData = Admincard::create($saveData);
            }
            if ($getData) {
                return $this->returncode(200, 'No data', 'success');
            } else {
                return $this->returncode(300, '', DB::getQueryLog()); //query error
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getadmincard()
    {
        // $data = Admincard::get();
        $data = DB::table('admincard_rules')
            ->join('admincards', 'admincard_rules.id', '=', 'admincards.rule_id')
            ->get();
        return $data;
    }
    public function deletecard($id)
    {
        try {
            DB::enableQueryLog();
            $delete = Admincard::where("id", "=", $id)->delete();
            if ($delete) {
                return $this->returncode(200, "No data", 'success');
            } else {
                return $this->returncode(300, "Can not delete", DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function sendeditcard($id)
    {
        $getData = Admincard::find($id)->get();
        return $getData;
    }
    public function addrule(Request $request)
    {
        // return $request;
        try {
            DB::enableQueryLog();
            $getdata = array(
                'rulename' => $request->rulename,
                'rule_level' => $request->rule_level,
                'level' => $request->level,
                'localted' => $request->localted,
                'inAnd' => $request->inAnd,
                'Notin' => $request->Notin,
                'amoute' => $request->amoute,
                'from' => $request->from,
                'to' => $request->to,
            );
            $saveData = admincard_rule::create($getdata);
            if ($saveData) {
                return $this->returncode(200, "success", 'success');
            } else {
                return $this->returncode(300, "Can not success", DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function getadminrule()
    {
        $getdata = admincard_rule::get();
        return $getdata;
    }
    public function deleteruld($id)
    {
        try {
            DB::enableQueryLog();
            $deleteRuld = admincard_rule::find($id)->delete();
            if ($deleteRuld) {
                return $this->returncode(200, "Delete", 'success');
            } else {
                return $this->returncode(300, "Can not Delete", DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
}
