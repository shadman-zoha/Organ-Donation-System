@extends("MainPage")
@section('content')


    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                Requested Organs
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
