@extends('admin.layout.AdminDashboard')
@section('admincontent')
    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">

            <div class="flex flex-1 px-3 py-3 h-14 bg-blue-500 ">
                <div class="flex-1 no-underline font-bold text-2xl text-center text-white">
                    Patient Requested Message
                </div>
            </div>



            <div class="p-3">
                <table class="table-responsive w-full rounded">
                    <thead>
                        <tr>
                            <th class="border w-1/4 px-4 py-2">Patient Name</th>
                            <th class="border w-1/6 px-4 py-2">Patient Email</th>
                            <th class="border w-1/6 px-4 py-2">Phone Number</th>
                            <th class="border w-1/6 px-4 py-2">Message</th>


                        </tr>
                    </thead>
                    @foreach ($data as $key)
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">{{ $key->name }}</td>
                                <td class="border px-4 py-2">{{ $key->email }}</td>
                                <td class="border px-4 py-2">{{ $key->Phone_Number }}</td>
                                <td class="border px-4 py-2">{{ $key->message }} </td>


                            </tr>

                        </tbody>
                    @endforeach
                </table>

            </div>
        </div>
    @endsection
