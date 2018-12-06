<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;

class HomeController extends Controller
{
    public function test(){
        $data = User::All();
        return view('welcome',compact('data'));
    }

    public function url(Request $request){
        return $request->fullUrl();
    }

    public function doLogin(Request $request)
    {
        $data = User::All();
        if ($request->has('user') && $request->has('pass')){
            $user = $request->input('user');
            $pass = $request->input('pass');
            foreach ($data as $key => $val ){
                if ($user = $val->username && $pass == $val->password){
                    if ($user == 'admin'){
                        return view('admin');
                    }
                    return view('welcome',compact('data'));
                }
                else{
                    return view('dangnhap');
                }
            }
        }
    }
}
