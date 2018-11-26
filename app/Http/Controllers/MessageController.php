<?php

namespace App\Http\Controllers;
use App\User;
use App\Message;
use Auth;
Use App\Http\Requests\MessageRequest;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message()
    {
        return view ('layouts.messaging');
    }
    public function store(Request $request)
   
{
    //dd($request->all());
    $id=Auth::user()->id;
    $message=new Message([
        'subject'=>$request->subject,
        'message'=>$request->message,
        'user_id'=>$id

    ]); 
    $message->save();
    return redirect()->back();


    }
    public function view(){
        $message=Message::all();
        return view('layouts.view_messages',compact('message'));
    }
    public function details($id){
        $message=Message::whereId($id)->first();
        return view('layouts.details',compact('message'));
    }
    public function delete($id)
{  $messages = Message::find($id);
    $messages->delete();
    return redirect()->back();
}
}
