<?php

namespace App\Http\Controllers\Agent\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agent_login;

use Illuminate\Support\Facades\Hash;
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
        return view('auth.agent_login', [
            'title' => 'Admin Login',
            'loginRoute' => 'admin.login',
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

        if (Auth::guard('agents')->attempt($request->only('email', 'password'))) {
            //Authentication passed...
            return redirect('agent');
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
        Auth::guard('agents')->logout();
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
        $req = $request;
        $shinfo = Agent_login::where('email','=',$req->email)->limit(1)->get();
        if($shinfo->count() > 0){
            $oldpwd = $shinfo->pluck('password')[0];
            if(Hash::check($req->password, $oldpwd)){
                Session(['code'=>200]);
                return ['code'=>200];
            }
        }
        Session(['code'=>300]);
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
