@extends('MainPage')
@section('content')


@if (session()->has('message'))
<div class="bg-green-300 mb-2 border border-green-300 text-green-600 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">Hello!</strong>
    <span class="block sm:inline">You are successfully login.</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-green" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
    </span>
</div>
@endif
    <div class="flex flex-col">
        
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <div
                class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">

                    <a href="reqOrgan" class="no-underline text-white text-lg">
                        Request Organ
                    </a>
                </div>
            </div>

            <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">

                    <a href="donateOrgan" class="no-underline text-white text-lg">
                        Donate Organ
                    </a>
                </div>
            </div>

            {{-- <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                <div class="p-4 flex flex-col">

                    <a href="status" class="no-underline text-white text-lg">
                        Status
                    </a>
                </div>
            </div> --}}


        </div>
    </div>

   



    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                Requested Organs
            </div>
            <div class="p-3">
                <table class="table-responsive w-full rounded">
                    <thead >
                        <tr>
                            <th class="border w-1/4 px-4 py-2">Patient Name</th>
                            <th class="border w-1/6 px-4 py-2">IC Number</th>
                            <th class="border w-1/6 px-4 py-2">Organ Name</th>
                            <th class="border w-1/6 px-4 py-2">Hospital Name</th>
                            <th class="border w-1/6 px-4 py-2">Health Condition</th>
                            <th class="border w-1/7 px-4 py-2">Status</th>

                        </tr>
                    </thead>
                    @foreach ($Rdata as $key)
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">{{ $key->name }}</td>
                                <td class="border px-4 py-2">{{ $key->ic }}</td>
                                <td class="border px-4 py-2">{{ $key->organ_name }}</td>
                                <td class="border px-4 py-2">{{ $key->hospital_name }} </td>
                                <td class="border px-4 py-2">{{ $key->health_condition }} </td>
                                <td class="border px-4 py-2">{{ $key->status }} </td>

                            </tr>

                        </tbody>
                    @endforeach
                </table>
                <br>
                <br>
                <br>

            </div>
        </div>
    </div>






    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                Donated Organs
            </div>
            <div class="p-3">
                <table class="table-responsive w-full rounded">
                    <thead>
                        <tr>
                            <th class="border w-1/4 px-4 py-2">Patient Name</th>
                            <th class="border w-1/6 px-4 py-2">IC Number</th>
                            <th class="border w-1/6 px-4 py-2">Organ Name</th>
                            <th class="border w-1/6 px-4 py-2">Hospital Name</th>
                            <th class="border w-1/6 px-4 py-2">Health Condition</th>
                            <th class="border w-1/6 px-4 py-2">Type Of Donation</th>
                            <th class="border w-1/7 px-4 py-2">Status</th>

                        </tr>
                    </thead>
                    @foreach ($Ddata as $key)
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">{{ $key->name }}</td>
                                <td class="border px-4 py-2">{{ $key->ic }}</td>
                                <td class="border px-4 py-2">{{ $key->organ_name }}</td>
                                <td class="border px-4 py-2">{{ $key->hospital_name }} </td>
                                <td class="border px-4 py-2">{{ $key->health_condition }} </td>
                                <td class="border px-4 py-2">{{ $key->organ_type }} </td>
                                <td class="border px-4 py-2">{{ $key->status }} </td>

                            </tr>

                        </tbody>
                    @endforeach
                </table>


            </div>
        </div>
    </div>
  

    
@endsection
