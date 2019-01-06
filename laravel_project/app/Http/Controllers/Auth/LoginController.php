<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin(){
        $err = null;
        return view('login.login' , compact('err'));
    }

    public function postLogin(Request $request){
        $users = User::all();
        //dd($request);
        $password = md5($request->password);
        foreach ($users as $key => $val ){
            if ($request->account == $val->account && $password == $val->password){
                return view('welcome');
            }
        }
        $err = "
            swal({
                title: 'Failed Connect',
                text: 'Tài khoản hoặc mật khẩu sai',
                icon: 'error',
                });
        ";
        return view('login.login' , compact('err'));
    }
}
