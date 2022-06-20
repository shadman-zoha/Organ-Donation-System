@extends('admin.layout.AdminDashboard')
@section('admincontent')
    <div class="flex flex-1 px-3 py-3 h-14 bg-blue-500 ">
        <div class="flex-1 no-underline font-bold text-2xl text-center text-white">
            Patient list
        </div>            
    </div>  
    <div >
        <div class="flex border-2 rounded-lg bg-red-500 mx-1 my-2">
            <div class="no-underline font-bold text-xl font-mono px-3 py-1">
                Recipients
            </div>
        </div>  
        <div class="overflow-y-auto overflow-hidden h-full border rounded border-gray-500 p-1">
            @if ($recipients == 'No patients')
                <div class="grow w-full">
                    <div class="font-mono text-center text-lg">
                        No Requesting Patients 
                    </div>
                </div>
            @else
                <table class="table-fixed w-full">
                    <thead>
                        <tr>
                            <td class="border-2 w-1/3 px-2 py-3 text-lg">Patients</td>
                            <td class="border-2 w-1/3 px-2 py-3 text-lg">Requested organ</td>
                            <td class="border-2 w-1/6 px-2 py-3 text-lg">Time requested</td>
                            <td class="border-2 w-1/6 px-2 py-3 text-lg">Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recipients as $recipient)
                            <tr>
                                <td class="border-2 px-2 py-3">
                                    <div>
                                        {{ $recipient->name }}
                                    </div>
                                    <a href="/patient{{ $recipient->ic }}">
                                        <div class="italic text-sm text-blue-400 font-light hover:font-normal">
                                            View patient
                                        </div>
                                    </a>
                                </td>
                                <td class="border-2 px-2 py-3">{{ $recipient->organ_name }}</td>
                                <td class="border-2 px-2 py-3">{{ $recipient->created_at }}</td>
                                <td class="border-2 px-2 py-3">
                                    <div>
                                        {{ $recipient->status }}
                                    </div>
                                    @if ($recipient->status == 'Compatible donor found' 
                                        || $recipient->status == 'approved')
                                        <a href="/compatibles">
                                            <div class="italic text-sm text-blue-400 font-light hover:font-normal">
                                                View->
                                            </div>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <div >
        <div class="flex border-2 rounded-lg bg-green-500 mx-1 my-2">
            <div class="no-underline font-bold text-xl font-mono px-3 py-1">
                Donors
            </div>
        </div>  
        <div class="overflow-y-auto overflow-hidden h-full border rounded border-gray-500 p-1">
            @if ($donors == 'No patients')
                <div class="grow w-full">
                    <div class="font-mono text-center text-lg">
                        No Donors 
                    </div>
                </div>
            @else
                <table class="table-fixed w-full">
                    <thead>
                        <tr>
                            <td class="border-2 w-1/3 px-2 py-3 text-lg">Patients</td>
                            <td class="border-2 w-1/3 px-2 py-3 text-lg">Donated organ</td>
                            <td class="border-2 w-1/6 px-2 py-3 text-lg">Time requested</td>
                            <td class="border-2 w-1/6 px-2 py-3 text-lg">Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donors as $donor)
                            <tr>
                                <td class="border-2 px-2 py-3">
                                    <div>
                                        {{ $donor->name }}
                                    </div>
                                    <a href="/patient{{ $donor->ic }}">
                                        <div class="italic text-sm text-blue-400 font-light hover:font-normal">
                                            View patient
                                        </div>
                                    </a>
                                </td>
                                <td class="border-2 px-2 py-3">{{ $donor->organ_name }}</td>
                                <td class="border-2 px-2 py-3">{{ $donor->created_at }}</td>
                                <td class="border-2 px-2 py-3">
                                    <div>
                                        {{ $donor->status }}
                                    </div>
                                    @if ($donor->status == 'Recipient found' 
                                        || $donor->status == 'approved')
                                        <a href="/donors">
                                            <div class="italic text-sm text-blue-400 font-light hover:font-normal">
                                                View->
                                            </div>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection