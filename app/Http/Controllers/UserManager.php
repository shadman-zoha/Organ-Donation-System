<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;
use App\Models\Patient;

use Illuminate\Http\Request;

class UserManager extends Controller
{
    
    public function registerUser(Request $request, $usertype)
    {
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'usertype' => $usertype,
        ]);

        event(new Registered($user));

        return $user;
    }

    public function registerPatient(Request $request)
    {
        
             if(request()->has('avatar')){
               $avatarUploaded = request()->file('avatar');
               $avatarName = time() . '.' . $avatarUploaded->getClientOriginalExtension();
               $avatarPath = public_path('./assets/dist/images');
               $avatarUploaded->move( $avatarPath, $avatarName);

               $patient = Patient::create([
                'id' => Auth::user()->id,
                'name' =>  $request->name,
                'IC_Number' => $request->ic,
                'Age' => $request->age,
                'Date_Of_Birth' => $request->dob,
                'Phone_Number' => $request->number,
                'Address' => $request->address,
                'Weight' => $request->weight,
                'Blood_Group' => $request->blood,
                 'avatar' => './assets/dist/images/' . $avatarName,
                'Secret_Question' => $request->question,
                'QuesAnswer' => $request->QuesAnswer,
                'Family_Contact' => $request->familyNumber,
                'Family_Contact_Name' => $request->familyName,
                'Gender' => $request->gender,
               
              ]);
  
            //   event(new Registered($user));
  
            //   Auth::login($user);
  
  
            //   return redirect('login')->with('mssg', 'sucess!');

             }
       
             $patient = Patient::create([
                'id' => Auth::user()->id,
              'name' =>  $request->name,
              'IC_Number' => $request->ic,
              'Age' => $request->age,
              'Date_Of_Birth' => $request->dob,
              'Phone_Number' => $request->number,
              'Address' => $request->address,
              'Weight' => $request->weight,
              'Blood_Group' => $request->blood,

              'Secret_Question' => $request->question,
              'QuesAnswer' => $request->QuesAnswer,
              'Family_Contact' => $request->familyNumber,
              'Family_Contact_Name' => $request->familyName,
              'Gender' => $request->gender,
          
              
            ]);

            // event(new Registered($user));

            // Auth::login($user);


            // return redirect('login')->with('mssg', 'sucess!');
      
          
         
    }




    

    public function registerAdmin(Request $request, User $user)
    {
        Admin::create([
            'name' => $request->name,
            'id' => $user->id,
        ]);
    }
}
