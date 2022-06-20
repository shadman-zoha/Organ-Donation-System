<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;
use App\Models\Patient;
use App\Models\Hospital;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;


use Illuminate\Support\Facades\DB;

class Authentication extends Controller
{
  //
  public function authenticate(Request $req)
  {
    // code...
    $credentials = $req->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
      $req->session()->regenerate();

      $id = Auth::user()->usertype;


      switch ($id) {
        case 1:
          $path = '/admin';
          break;
        case 2:
          $path = '/index';

          break;
      }


      return redirect($path)->with('message', 'sucess!');
    }


    return redirect()->back()->with('message', 'Failed!');
  }



  //new
  public function registerPatient(Request $request)
  {
    $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    $user = new UserManager;

    Auth::login($user->registerUser($request, 2));
    $user->registerPatient($request);

    return redirect('/');
  }

  public function registerAdmin(Request $request)
  {
    $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);
    $umanager = new UserManager;
    $user = $umanager->registerUser($request, 1);
    $umanager->registerAdmin($request, $user);

    $hosmanager = new HospitalController;
    $hosmanager->create($request, Admin::where('id', $user->id)->get());
    
    return redirect('/adminregister')->with('message', 'success');
  }
  
  public function show()
  {
    // dd(Auth::user());
    $id = Auth::user()->id;
    // dd($id);
    // $data= DB::select("select * from users where id='$id'");
    $data = Patient::where('id', $id)->get();
    // dd($data);
    // return DB::select("select * from users where id='$id'");
    //return view('profile',['users'=>$data]);
    return view('PatientProfile', compact('data'));
  }

  public function reqOrganShow()
  {

    $id = Auth::user()->id;

    $data = Patient::where('id', $id)->get();

    $hospitals = Hospital::all();

    return view('RequestedOrgan', compact('data', 'hospitals'));
  }


  public function donateOrganShow()
  {

    $id = Auth::user()->id;

    $data = Patient::where('id', $id)->get();

    $hospitals = Hospital::all();

    return view('DonateOrgan', compact('data', 'hospitals'));
  }

  public function SettingShow()
  {

    $id = Auth::user()->id;

    $data = Patient::where('id', $id)->get();

    return view('setting', compact('data'));
  }


  public function ChangePass(Request $req)
  {

    $id = Auth::user()->id;
    $password = Auth::user()->password;

    if (Hash::check($req->OldPassword, $password)) {

      $data = User::find($id);
      $data->password = Hash::make($req->NewPassword);
      $data->save();
      return redirect()->back()->with('msg', 'sucess');
    } else {

      return redirect()->back()->with('message', 'Failed!');
    }

    return redirect('index');
  }

  public function index()
  {
    if (Auth::id()) {
      return view('PatientDashboard');
    } else {
      return view('login');
    }
  }

  public function logout(Request $request)
  {
    Auth::logout();
    return redirect('/login');
  }




  public function forgotpass(Request $req)
  {
    $email = $req->email;
    

    if(DB::table('users')
    ->where(['email' => $req->email, 'usertype'=>2])
    ->first()){

    
    $data = DB::table('users')
      ->where(['email' => $req->email])
      ->first();
    $userEmail= $data -> email;
    $id= $data -> id;

    if ($email == $userEmail) {

     
      $dataP = Patient::where('id', $id)->get();

      return view('ForgotPassChange', compact('dataP'));

    } else {
      return redirect()->back()->with('message', 'Failed!');
    }
  }else{
    return redirect()->back()->with('message', 'Failed!');
  }
   
  }



  public function ForgotPassChange(Request $req)
  {
    $answer = $req->answer;
    $id= $req->id;
    $data = Patient::where('id', $id)->first();
    $UserAnswer = $data->QuesAnswer;
    if($answer==$UserAnswer)
    {
     
     
      $Data = User::find($id);
      $Data->password = Hash::make($req->Newpassword);
      $Data->save();
      return redirect('login')->with('msgg1', 'sucess!');

    }
    else{
      return redirect()->back()->with('messg', 'Failed!');
    }
    
   

  }
}
