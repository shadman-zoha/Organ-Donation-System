@extends('admin.layout.AdminDashboard')
@section('admincontent')
<div class="p-1 mx-3 inline-flex items-center">
    <h1 class="text-2xl p-2">Welcome, {{ $admin->name }}!</h1>
</div>
<div class="flex flex-row flex-nowrap">
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 ">
        <div class="flex-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <a href="patientlist" class="no-underline text-white text-lg">
                List of Patients
            </a>
            </div>
    </div>
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 ">
        <div class="flex-1 bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">
            <a href="/compatibles" class="no-underline text-white text-lg">
                Compatible Recipients
            </a>
        </div>
    </div>   
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 ">
        <div class="flex-1 bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">
            <a href="/donors" class="no-underline text-white text-lg">
                Compatible Donors
            </a>
        </div>
    </div> 
</div>
<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2 my-4">
    <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
            Other Administrators
        </div>
        @if ($admins->isEmpty())
            <div class="grow w-full">
                <div class="font-mono text-center text-lg">
                    No Other Administrators 
                </div>
            </div>
        @else
            <div class="p-3">
                <table class="table-responsive w-full rounded">
                    <thead>
                    <tr>
                        <th class="border w-1/4 px-4 py-2">Admin Name</th>
                        <th class="border w-1/6 px-4 py-2">Hospital</th>
                        <th class="border w-1/6 px-4 py-2">Location</th>
                        <th class="border w-1/6 px-4 py-2">Contact</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <td class="border px-4 py-2">{{ $admin->name }}</td>
                                <td class="border px-4 py-2">{{ $admin->hospital_name }}</td>
                                <td class="border px-4 py-2">{{ $admin->location }}</td>
                                <td class="border px-4 py-2">{{ $admin->hospital_contact_number }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
@endsection