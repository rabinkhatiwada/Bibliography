<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contactme(){
        return view('contact');
    }
    public function sendmsg(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'message'=>'required'
            ]

        );


        //echo"<pre>";
        //print_r($request->all());
        $message = new Message;
        $message->name = $request['name'];
        $message->email = $request['email'];
        $message->msg = $request['message'];
        $message->save();
        echo '<script>alert("Message Sent Successfully!");</script>';

    }

    public function detail($id){
        dd(Message::where('id',$id)->first());
    }

    public function msg(){
        // $messages=Message::all();
        $messages=DB::table('messages')->get();
        // dd($messages,$messages1);
        return view('admin.contacts',['messages'=>$messages]);
    }
    public function msgdetail($id)
    {
        // Fetch the message with the provided ID
        $message = Message::find($id);

        // Pass the message to the view
        return view('admin.msgdetail', compact('message'));
    }

    public function msgdelete($id){
        Message::find($id)->delete();
        return redirect()->back();
    }



}
