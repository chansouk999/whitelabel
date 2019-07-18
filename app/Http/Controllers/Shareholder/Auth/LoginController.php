<?php

namespace App\Http\Controllers\Shareholder\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shareholder_login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
     /**
     * Show the login form.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('guest:administrator')->except('logout');
    // }
    // public function index(){
    //     return view('auth.admin_login');
    // }
    public function showLoginForm()
    {
        return view('auth.shareholder_login', [
            'title' => 'Admin Login',
            'loginRoute' => 'shareholder/login',
            'forgotPasswordRoute' => 'admin.password.request',
        ]);
    }
    /**
     * Login the admin.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $this->validator($request);

        if (Auth::guard('shareholders')->attempt($request->only('email', 'password'))) {
            //Authentication passed...
            return redirect('shareholder');
        }
        //Authentication failed...
        return $this->loginFailed();
    }
    /**
     * Logout the admin.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::guard('shareholders')->logout();
        return view('auth.agent_login');
    }
    /**
     * Validate the form data.
     *
     * @param \Illuminate\Http\Request $request
     * @return
     */



    private function validator(Request $request)
    {
        //validation rules
        $req = $request;
        $shinfo = Shareholder_login::where('email','=',$req->email)->limit(1)->get();
        if($shinfo->count() > 0){
            $oldpwd = $shinfo->pluck('password')[0];
            if(Hash::check($req->password, $oldpwd)){
                Session(['code'=>200]);
                return ['code'=>200];
            }
        }
        Session(['code'=>300]);
        // return $request;
    }
    /**
     * Redirect back after a failed login.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    private function loginFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Login failed, please try again!');
    }
}
