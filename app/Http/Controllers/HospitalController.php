<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;
use App\Models\Admin;

class HospitalController extends Controller
{
    public function create(Request $request, $admin)
    {
        $hospital_location = $request->city .', '. $request->state . " " . $request->zipcode;
        Hospital::create([
            'hospital_name' => $request->hospital_name,
            'location' => $hospital_location,
            'hospital_contact_number' => $request->hospital_contact_number,
            'admin_id' => $admin->first()->admin_id,
        ]);
    }
}
