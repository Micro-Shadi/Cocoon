<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Mail\Mile;
use App\Models\User;
use App\Models\Part;
use DB;

class MailController extends Controller
{
 public function maile(){
     return view('sendmail');
 }
 
 public function sendemaile(Request $request)
 {
     $data=[
        "title"=>$request->title,
        "email"=>$request->email,
        "msg"=>$request->msg,
     ];

     $users = DB::table('parts')->get();

     foreach ($users as $user)
     { 

   Mail::to($user->email)->send(new Mile($data));
     }
   
   return back()->with('success','تم ارسال الرسائل لكافة المستخدمين بنجاح  !');
 }
  

 
}
