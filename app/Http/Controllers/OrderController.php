<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Mail;

class OrderController extends Controller
{
    public function order(){
        return view('order');
    }

    public function sendEmail(Request $request){
        $details = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'msg'=>$request->msg,
            'country'=>$request->country,
            'fruits'=>$request->fruits,
            'vegetables'=>$request->vegetables
        ];

        Mail::to('freshexport.order@gmail.com')->send(new OrderMail($details));
        return back()->with('message_sent', 'Your message has been sent successfully!');
    }
}
