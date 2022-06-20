@extends('admin.layout.AdminDashboard')
@section('admincontent')
    <div class="flex flex-1 px-3 py-3 h-14 bg-green-500 ">
        <div class="flex-1 no-underline font-bold text-2xl text-center text-white">
            Compatible Recipients
        </div>            
    </div>
    <div class="border-2 rounded my-1 p-1">
        @if ($compatibles->isEmpty())
            <div class="font-mono text-center text-lg">
                No compatible Recipients
            </div>
        @else
            <table class="table-fixed w-full font-mono">
                <thead>
                    <tr>
                    <th class="border w-1/5 px-4 py-2">Recipient</th>
                    <th class="border w-1/5 px-4 py-2">Donor</th>
                    <th class="border w-1/6 px-4 py-2">Organ</th>
                    <th class="border w-1/6 px-4 py-2">Compatible status</th>
                    <th class="border w-1/6 px-4 py-2">Donation status</th>
                    <th class="border w-1/5 px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($compatibles as $compatible)
                        <tr>
                            <td class="border px-4 py-2">
                                <div>
                                    {{ $compatible->recepient_name }},
                                </div>
                                <div>
                                    {{ $compatible->recepient_hospital }}
                                </div>
                                <a href="/patient{{ $compatible->recepient_id }}">
                                    <div class="italic text-sm text-blue-400 font-light hover:font-normal">
                                        View patient
                                    </div>
                                </a>
                            </td>
                            <td class="border px-4 py-2">
                                <div>
                                    {{ $compatible->donor_name }},
                                </div>
                                <div>
                                    {{ $compatible->donor_hospital }}
                                </div>
                                <a href="/patient{{ $compatible->donor_id }}">
                                    <div class="italic text-sm text-blue-400 font-light hover:font-normal">
                                        View patient
                                    </div>
                                </a>
                            </td>
                            <td class="border px-4 py-2">{{ $compatible->organ_name }}</td>
                            <td class="border px-4 py-2">{{ $compatible->compatible_status }}</td>
                            <td class="border px-4 py-2">{{ $compatible->donation_status }}</td>
                            <td class="border px-4 py-2">
                                @if ($compatible->donation_status == 'pending')
                                    <div 
                                        class="border-2 rounded-full border-solid bg-green-400 hover:bg-green-500 p-2 m-1 text-center font-bold text-white">
                                        <div class="text-center font-medium font-mono text-white hover:font-semibold">
                                            <a href="/compatibles/{{ $compatible->id }}/approved">
                                                Approve
                                            </a>
                                        </div>
                                    </div>
                                    <div 
                                        class="border-2 rounded-full border-solid bg-red-400 hover:bg-red-500 p-2 m-1 text-center font-bold text-white">
                                        <div class="text-center font-medium font-mono text-white hover:font-semibold">
                                            <a href="/compatibles/{{ $compatible->id }}/rejected">
                                                Reject
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <div 
                                        class="border-2 rounded-full border-solid bg-gray-500 p-2 m-1 text-center font-bold text-white">
                                        <div class="text-center font-medium font-mono text-white">
                                            Approve
                                        </div>
                                    </div>
                                    <div 
                                        class="border-2 rounded-full border-solid bg-gray-500 p-2 m-1 text-center font-bold text-white">
                                        <div class="text-center font-medium font-mono text-white">
                                            Reject
                                        </div>
                                    </div>
                                @endif
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @endif
        </table>
    </div>
    
    
@endsection