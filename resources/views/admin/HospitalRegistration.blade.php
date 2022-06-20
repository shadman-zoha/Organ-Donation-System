@extends('admin.layout.AdminDashboard')
@section('admincontent')
    <div class="flex flex-row flex-1 px-4 py-3 border-slate-300">
        <div>
            <form action="/admin/{{ $newAdmin->admin_id }}" method="POST">
                @csrf
                <div>
                    <input type="text" name="name" placeholder="Enter hospital name">
                </div>
                <div>
                    <input type="text" name="location" placeholder="Enter location">
                </div>
                <div>
                    <input type="text" name="number" placeholder="Enter hospital contact number">
                </div>
                <div>
                    <button type="submit">
                        Register Hospital
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection