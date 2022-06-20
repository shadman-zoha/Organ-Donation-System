@extends('admin.layout.AdminDashboard')
@section('admincontent')
    <div class="border border-slate-500 bg-blue-100 rounded-lg m-3">
        <div class="border border-gray-300 rounded-lg w-full bg-gray-300 font-mono font-bold text-lg px-1 py-3">
            Patient Info
        </div>
        <div class="">
            <img src="{{ $patientdata->avatar }}" alt="User Profile Picture"
                style="height:300px; border-radius:50%;     margin: 10px auto 20px;">
        </div>
        <div class="flex flex-row mx-2 my-3">
            <div class="mx-1 w-1/2">
                <label class="font-mono font-bold text-lg px-1 py-2">
                    Patient Name
                </label>
                <div class="border border-black-300 bg-gray-100 text-lg px-1 py-2">
                    {{ $patientdata->name }}
                </div>
            </div>
            <div class="mx-1 w-1/2">
                <label class="font-mono font-bold text-lg px-1 py-2">
                    IC Number
                </label>
                <div class="border border-black-300 bg-gray-100 text-lg px-1 py-2">
                    {{ $patientdata->IC_Number }}
                </div>
            </div>
        </div>
        <div class="flex flex-row mx-2 my-3">
            <div class="mx-1 w-1/3">
                <label class="font-mono font-bold text-lg px-1 py-2">
                    Age
                </label>
                <div class="border border-black-300 bg-gray-100 text-lg px-1 py-2">
                    {{ $patientdata->Age }}
                </div>
            </div>
            <div class="mx-1 w-1/3">
                <label class="font-mono font-bold text-lg px-1 py-2">
                    Gender
                </label>
                <div class="border border-black-300 bg-gray-100 text-lg px-1 py-2">
                    {{ $patientdata->Gender }}
                </div>
            </div>
            <div class="mx-1 w-1/3">
                <label class="font-mono font-bold text-lg px-1 py-2">
                    Date of Birth
                </label>
                <div class="border border-black-300 bg-gray-100 text-lg px-1 py-2">
                    {{ $patientdata->Date_Of_Birth }}
                </div>
            </div>
        </div>
        <div class="mx-2 my-3">
            <label class="font-mono font-bold text-lg px-1 py-2">
                Address
            </label>
            <div class="border border-black-300 bg-gray-100 text-lg px-1 py-2">
                {{ $patientdata->Address }}
        </div>
        <div class="flex flex-row my-3">
            <div class="mx-1 w-1/2">
                <label class="font-mono font-bold text-lg px-1 py-2">
                    Weight
                </label>
                <div class="border border-black-300 bg-gray-100 text-lg px-1 py-2">
                    {{ $patientdata->Weight }}
                </div>
            </div>
            <div class="mx-1 w-1/2">
                <label class="font-mono font-bold text-lg px-1 py-2">
                    Blood Group
                </label>
                <div class="border border-black-300 bg-gray-100 text-lg px-1 py-2">
                    {{ $patientdata->Blood_Group }}
                </div>
            </div>
        </div>
        <div class="flex flex-row my-3">
            <div class="mx-1 w-1/2">
                <label class="font-mono font-bold text-lg px-1 py-2">
                    Family Contact
                </label>
                <div class="border border-black-300 bg-gray-100 text-lg px-1 py-2">
                    {{ $patientdata->Family_Contact_Name }}
                </div>
            </div>
            <div class="mx-1 w-1/2">
                <label class="font-mono font-bold text-lg px-1 py-2">
                    Family Contact Number
                </label>
                <div class="border border-black-300 bg-gray-100 text-lg px-1 py-2">
                    {{ $patientdata->Family_Contact }}
                </div>
            </div>
        </div>
    </div>
@endsection