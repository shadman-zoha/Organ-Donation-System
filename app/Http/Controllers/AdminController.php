<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\ReqOrgan;
use App\Models\DonOrgan;
use App\Models\Hospital;
use App\Models\Admin;
use App\Models\Patient;
use App\Models\User;

class AdminController extends Controller
{
  public function index() {

    $admins = DB::table('admins')
              ->join('hospitals', 'hospitals.admin_id', 'admins.admin_id')
              ->where('id', '!=',  Auth::user()->id)
              ->select('admins.*', 'hospitals.*')
              ->get();

    return view('admin.AdminContent', [
      'admin' => Admin::where('id', Auth::user()->id)->get()->first() ,
      'admins' => $admins
    ]);
  }
  
  public function adminRegistrationShow() {
    return view('admin.RegisterAdmin');
  }

  public function listPatients(){
    $admin = Admin::where('id', Auth::user()->id)->get()->first()->admin_id;
    $hospital = Hospital::where('admin_id', $admin)->get()->first()->hospital_name;

    $recipients = $donors = 'No patients';
    
    if (ReqOrgan::where('hospital_name', $hospital)->exists()) {
      $recipients = ReqOrgan::where('hospital_name', $hospital)->get();   
    }

    if (DonOrgan::where('hospital_name', $hospital)->exists()) {
      $donors = DonOrgan::where('hospital_name', $hospital)->get();
    }
         
      return view('admin.PatientList', compact('recipients', 'donors'));
  }

  public function patientInfoShow($patient_ic) {
    $patientdata = Patient::where('IC_Number', $patient_ic)->get()->first();
    return view('admin.PatientProfile', ['patientdata' => $patientdata]);
  }
}
