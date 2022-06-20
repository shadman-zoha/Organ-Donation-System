<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Patient;

use App\Models\Message;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class Messages extends Controller
{
    public function message(Request $request)
    {
        $id = Auth::user()->id;
        //


        $data = Patient::where('id', $id)->first();
        $name = $data->name;
        $Phone_Number =  $data->Phone_Number;



        $email = Auth::user()->email;
       


        $message = new Message;

        $message->user_id = $id;
        $message->name = $name;
        $message->email = $email;
        $message->Phone_Number = $Phone_Number;
        $message->message = $request->message;
        $message->save();

        return redirect()->back()->with('message', 'sucess!');
    }

    public function Messageshow()
    {
        $id = Auth::user()->id;

        Message::all();
        $data = Message::where('user_id', $id)->get();

        return view('patientMessage', compact('data'));
    }

    public function messageshowadmin()
    {


        $data =  Message::all();


        return view('AdminView', compact('data'));
    }
}
