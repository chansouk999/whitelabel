<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Users;
use App\userdetail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        function generateRandomString($length = 5) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        
        $pwduser = $data['password'];
        $password = $pwduser;
        $hashpassword = str_split($password);
        $count = count($hashpassword);
        $hash = [];
        foreach($hashpassword as $pwd){
            $hash[] =  generateRandomString()."".$pwd."";
        }
        $datas = implode('-',$hash);
        $insertpwd = $datas;
        
        $userid = date('His').generateRandomString();
        $date = date('y-m-d H:i:s');
        $ip = \Request::getClientIp();
        $user = User::create([
            'user_id'=>$userid,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'provider_name' => 'Whitelebel1',
            'pro_id' => '0001',
            'userBalance' => 0,
            'totalOnlineHour'=>0,
            'userStatus'=>'online',
            'registerTime'=>$date,
            'last_activity'=>$date,
            'accessTime'=>$date,
            'accessIP'=>$ip,
            'pwdhashed'=>$insertpwd,
        ]);
        $id = trim(User::latest()->limit(1)->pluck('id'),'["]');

        userdetail::create([
            'id' => $id,
            'user_id' => $userid,
            'currency' => 'USD',
            'lang' => 'CH',
            'TotalRolling' => 0,
            'AvailableRolling' => 0,
        ]);
        return $user;
    }
}
