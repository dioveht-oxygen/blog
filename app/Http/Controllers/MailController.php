<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
//use Illuminate\Support\Facades\Mailer;
//use App\Mail\OrderShipped;

class MailController extends Controller
{
    public function getMail(){
        return view('mail.mail');
    }

    public function postSendMail(Request $request)
    {
        //$input = $request->all();
        $data = [ 'name' => "Dioveht"];
        Mail::send('mail.mail_template' , $data , function ($msg){
            $msg->from('kiritosao1526@gmail.com' ,'kiri');
            $msg->to('phannam1412@yahoo.com' , 'kiri')->subject('test gui mail');
        });
//        return view('mail');
    }
}
