<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class formcontroller extends Controller
{
    
    public function submit(Request $request)
{
    $validatedData = $request->validate([
        'txtMsg' => 'required|max:255',
        'txtName' => 'required',
        'txtEmail' => 'required',
        'txtPhone' => 'required|alpha_num',
    ]);

    // create message...
    $message =new Message;
    $message->txtMsg =$request->input('txtMsg');
    $message->txtName =$request->input('txtName');
    $message->txtEmail =$request->input('txtEmail');
    $message->txtPhone =$request->input('txtPhone');
    // save message
    $message->save();
    
    // return redirect
    // return redirect ('home')->with('success', 'message sent');
    return redirect()->back()->with('success', 'message sent');

}


public function index(){
    $users = DB::select('SELECT * FROM `messages` WHERE 1');
    return view('Form',['users'=>$users]);
    }
    
}
