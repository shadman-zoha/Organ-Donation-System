<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ReqOrgan;
use App\Models\DonOrgan;
use App\Models\Patient;

class Organ extends Controller
{
  public function ReqOrgan(Request $req)
  {

    $id = Auth::user()->id;

    $data = Patient::where('id', $id)->first();
    $ic = $data->IC_Number;
    $name =  $data->name;
    $Blood_Group =  $data->Blood_Group;
    $organ = new ReqOrgan;
    $organ->name = $name;
    $organ->ic = $ic;
    $organ->Blood_Group = $Blood_Group;
    $organ->organ_name = $req->organ_name;
    $organ->hospital_name = $req->hospital_name;
    $organ->health_condition = $req->health_condition;
    $organ->diseases = $req->diseases;
    $organ->transplant_before = $req->transplant_before;
    $organ->condition = $req->condition;


    $organ->save();

    $compControl = new CompatibleController;
    $compControl->checkCompatibility($organ);

    return redirect()->back()->with('message', 'sucess!');
  }


  public function DonOrgan(Request $req)
  {

    $id = Auth::user()->id;

    $data = Patient::where('id', $id)->first();
    $ic = $data->IC_Number;
    $name =  $data->name;
    $Blood_Group =  $data->Blood_Group;
    $organ = new DonOrgan;
    $organ->name = $name;
    $organ->ic = $ic;
    $organ->Blood_Group = $Blood_Group;
    $organ->organ_name = $req->organ_name;
    $organ->hospital_name = $req->hospital_name;
    $organ->organ_type = $req->organ_type;
    $organ->health_condition = $req->health_condition;
    $organ->diseases = $req->diseases;
    $organ->donate_before = $req->donate_before;
    $organ->condition = $req->condition;

    $organ->save();

    $compControl = new CompatibleController;
    $compControl->checkCompatibility($organ);

    return redirect()->back()->with('message', 'sucess!');
  }



  // public function status()
  // {

  //   $id = Auth::user()->id;


  //   $data = Patient::where('id', $id)->first();
  //   $ic = $data->IC_Number;
  //   $Rdata = ReqOrgan::where('ic', $ic)->get();

  //   $Ddata = DonOrgan::where('ic', $ic)->get();

  //   return view('Status', compact('Rdata', 'Ddata'));
  // }

  
  public function profilestatus()
  {

    $id = Auth::user()->id;


    $data = Patient::where('id', $id)->first();
    $ic = $data->IC_Number;
    $Rdata = ReqOrgan::where('ic', $ic)->get();

    $Ddata = DonOrgan::where('ic', $ic)->get();

    return view('PatientDashboard', compact('Rdata', 'Ddata'));
  }
}
