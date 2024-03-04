<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
class HomeController extends Controller
{
    //
    public function basic_email(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
           
        ]);
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'msg'=>$request->msg,
            
        ];
        //print_r($data);exit;

        $user['to']='tech@waysaheadglobal.com';
        $mail=Mail::send('email.mail_know',$data,function($message) use ($user){
            $message->to($user['to']);
            $message->subject('Enquiry');
        });
        
            return redirect()->route('contact')->with('success', 'Thank you for contacting us ! Our team will get back to you shortly.');

        // }else{
        //     return redirect()->route('contact')->with('error', 'Sorry !! Somethings went wrong. Please try again later !!');

        // }
     }
}
