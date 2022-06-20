<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Hospital;
use App\Models\Compatible;
use App\Models\Patient;
use App\Models\ReqOrgan;
use App\Models\DonOrgan;

class CompatibleController extends Controller
{
    public function showCompatibleRecipients(){
        $admin = Admin::where('id', Auth::user()->id)->get()->first()->admin_id;
        $hospital_name = Hospital::where('admin_id', $admin)->get()->first()->hospital_name;
        $compatibles = DB::table('compatibles')
                        ->join('don_organs', 'compatibles.donor_id', '=', 'don_organs.ic')
                        ->join('req_organs', 'compatibles.recepient_id', '=', 'req_organs.ic')
                        ->where('req_organs.hospital_name', $hospital_name)
                        ->select('compatibles.*', 
                                'don_organs.name as donor_name',
                                'don_organs.hospital_name as donor_hospital',
                                'req_organs.name as recepient_name',
                                'req_organs.hospital_name as recepient_hospital')
                        ->get();
        return view('admin.CompatibleList',[
            'compatibles' => $compatibles
        ]);
    }

    public function showCompatibleDonors(){
        $admin = Admin::where('id', Auth::user()->id)->get()->first()->admin_id;
        $hospital_name = Hospital::where('admin_id', $admin)->get()->first()->hospital_name;
        $compatibles = DB::table('compatibles')
                        ->join('don_organs', 'compatibles.donor_id', '=', 'don_organs.ic')
                        ->join('req_organs', 'compatibles.recepient_id', '=', 'req_organs.ic')
                        ->where('don_organs.hospital_name', $hospital_name)
                        ->select('compatibles.*', 
                                'don_organs.name as donor_name',
                                'don_organs.hospital_name as donor_hospital',
                                'req_organs.name as recepient_name',
                                'req_organs.hospital_name as recepient_hospital')
                        ->get();
        return view('admin.DonorList',[
            'compatibles' => $compatibles
        ]);
    }

    public static function checkCompatibility($organ){
        if ($organ instanceof ReqOrgan) {
            if (DonOrgan::where('organ_name', $organ->organ_name)->exists()) {
                $donorgans = DonOrgan::where('organ_name', $organ->organ_name)
                            ->where('status', '!=', 'approved')
                            ->get();
                foreach ($donorgans as $donorgan ) {
                    if (($donorgan->health_condition == "Good" || $donorgan->health_condition == "Moderate") 
                    && ($organ->health_condition == "Good" || $organ->health_condition == "Moderate")) {
                        if ($donorgan->diseases == "No" && $organ->diseases == "No") {
                            if($donorgan->Blood_Group == $organ->Blood_Group) {
                                $comcon = new CompatibleController();
                                $comcon->createCompatible($organ, $donorgan, $organ->organ_name);
                                $donorgan->status = "Recipient found";
                                $organ->status = "Compatible donor found";
                                $donorgan->save();
                                $organ->save();
                            }
                        }
                    }
                } 
            }        
        }
        else if ($organ instanceof DonOrgan) {
            if (ReqOrgan::where('organ_name', $organ->organ_name)->exists()) {
                $reqorgans = ReqOrgan::where('organ_name', $organ->organ_name)
                            ->where('status', '!=', 'approved')
                            ->get();
                foreach ($reqorgans as $reqorgan ) {
                    if (($organ->health_condition == "Good" || $organ->health_condition == "Moderate") 
                    && ($reqorgan->health_condition == "Good" || $reqorgan->health_condition == "Moderate")) {
                        if ($organ->diseases == "No" && $reqorgan->diseases == "No") {
                            if($organ->Blood_Group == $reqorgan->Blood_Group) {
                                $comcon = new CompatibleController();
                                $comcon->createCompatible($reqorgan, $organ, $organ->organ_name);
                                $reqorgan->status = "Compatible donor found";
                                $organ->status = "Recipient found";
                                $reqorgan->save();
                                $organ->save();
                            }
                        }
                    } 
                }
            }
        }
    }

    private function createCompatible($reqorgan, $donorgan, $organ_name) {
        Compatible::create([
            'donor_id' => $donorgan->ic,
            'recepient_id' => $reqorgan->ic,
            'organ_name' => $organ_name,
            'compatible_status' => 'available',
        ]);
    }

    public function changeStatus($compatible, $newStatus) {
        $compatible = Compatible::where('id', $compatible)->get()->first();
        $compatible->compatible_status = 'Donation Approved';
        $compatible->donation_status = $newStatus;
        $compatible->save();
        
        $recepient = ReqOrgan::where('ic', $compatible->recepient_id)->get()->first();
        $donor = DonOrgan::where('ic', $compatible->donor_id)->get()->first();
        if ($newStatus == 'approved') {
            if (Compatible::whereNotIn('id', [$compatible->id])->where('donation_status', 'pending')->exists()) {
                $allCompatibles = Compatible::whereNotIn('id', [$compatible->id])
                                        ->where('donation_status', 'pending')
                                        ->get();
                $recepientCompatibles = $allCompatibles->where('recepient_id', $compatible->recepient_id)
                                                ->where('organ_name', $compatible->organ_name);
                foreach ($recepientCompatibles as $recepientCompatible) {
                    $recepientCompatible->compatible_status = 'Other donor found';
                    $recepientCompatible->donation_status = 'Not required';
                    if (!Compatible::whereNotIn('id', [$compatible->id])
                        ->where('donation_status', 'pending')
                        ->where('donor_id', $recepientCompatible->donor_id)
                        ->where('organ_name', $compatible->organ)->exists()) {
                            $otherdonor = DonOrgan::where('ic', $recepientCompatible->donor_id)->get()->first();
                            $otherdonor->status = 'pending';
                            $otherdonor->save();
                        }
                    $recepientCompatible->save();
                }
                $donorCompatibles = $allCompatibles->where('donor_id', $compatible->donor_id)
                                                ->where('organ_name', $compatible->organ_name);
                foreach ($donorCompatibles as $donorCompatible) {
                    $donorCompatible->compatible_status = 'Donor organ donated to other recipient';
                    $donorCompatible->donation_status = 'Not required';
                    if (!Compatible::whereNotIn('id', [$compatible->id])
                        ->where('donation_status', 'pending')
                        ->where('recipient_id', $donorCompatible->recipient_id)
                        ->where('organ_name', $compatible->organ)->exists()) {
                            $otherrecipient = ReqOrgan::where('ic', $donorCompatible->recipient_id)->get()->first();
                            $otherrecipient->status = 'pending';
                            $otherrecipient->save();
                        }
                    $donorCompatible->save();
                }
            }
            $recepient->status = $newStatus;
            $donor->status = $newStatus;
        }else if ($newStatus == 'rejected') {
            $compatible->compatible_status = 'Donation rejected';
            if (!Compatible::whereNotIn('id', [$compatible->id])
                ->where('donation_status', 'pending')
                ->where('recepient_id', $compatible->recepient_id)
                ->where('organ_name', $compatible->organ_name)->exists())
                $recepient->status = 'pending';
            if (!Compatible::whereNotIn('id', [$compatible->id])
                ->where('donation_status', 'pending')
                ->where('donor_id', $compatible->donor_id)
                ->where('organ_name', $compatible->organ_name)->exists())
                $donor->status = 'pending';
        }
        $recepient->save();
        $donor->save();
        $compatible->save();

        return redirect('/compatibles');
        
    }
}
