<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Hospital;
use App\Models\User;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(){
        if(Auth::id()){
          return view('PatientDashboard');
        } 
        else{
          return view('login');
        }
      }

    public function show()
    {
      // dd(Auth::user());
      $id = Auth::user()->id;
      $email = Auth::user()->email;
      // dd($id);
      // $data= DB::select("select * from users where id='$id'");
      $data = Patient::where('id', $id)->get();
      // return DB::select("select * from users where id='$id'");
      //return view('profile',['users'=>$data]);
      return view('PatientProfile',compact('data', 'email'));

    }

    public function reqOrganShow()
    {
      
      $id = Auth::user()->id;
      
      $data = Patient::where('id', $id)->get();

      $hospitals = Hospital::all();
     
      return view('RequestedOrgan',compact('data', 'hospitals'));

    }

    public function donateOrganShow()
    {
      
      $id = Auth::user()->id;
      
      $data = Patient::where('id', $id)->get();

      $hospitals = Hospital::all();
     
      return view('DonateOrgan',compact('data', 'hospitals'));

    }

    public function SettingShow()
    {
      
      $id = Auth::user()->id;
      
      $data = Patient::where('id', $id)->get();
     
      return view('setting',compact('data'));

    }


    public function Updateshow()
    {
      // dd(Auth::user());
      $id = Auth::user()->id;
      // dd($id);
      // $data= DB::select("select * from users where id='$id'");
      $data = Patient::where('id', $id)->get();
      // dd($data);
      // return DB::select("select * from users where id='$id'");
      //return view('profile',['users'=>$data]);
      return view('UpdateProfile', compact('data'));
    }

    public function UpdateProfile(Request $req)
    {
      $id = Auth::user()->id;
   
      // $Data = Patient::where('id', $id)->first();
       
       
      if(request()->has('avatar')){
        $avatarUploaded = request()->file('avatar');
        $avatarName = time() . '.' . $avatarUploaded->getClientOriginalExtension();
        $avatarPath = public_path('./assets/dist/images');
        $avatarUploaded->move( $avatarPath, $avatarName);
        
        $Data = Patient::where('id', $id)->first();
        $Data->name = $req->name;
        $Data->Phone_Number = $req->number;
        $Data->Address = $req->address;
        $Data->avatar = './assets/dist/images/' . $avatarName;
        
        $Data->Family_Contact = $req->familyNumber;
        $Data->Family_Contact_Name = $req->familyName;
        $Data->save();
        return redirect('profile')->with('msgg1', 'sucess!');
      }
      else{
        $Data = Patient::where('id', $id)->first();
        $Data->name = $req->name;
        $Data->Phone_Number = $req->number;
        $Data->Address = $req->address;
        
        $Data->Family_Contact = $req->familyNumber;
        $Data->Family_Contact_Name = $req->familyName;
        $Data->save();
        return redirect('profile')->with('msgg1', 'sucess!');
      }
      
    }
}
