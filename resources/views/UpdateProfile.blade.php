@extends('MainPage')
@section('content')


    <form action="UpdateProfile" method="POST"  enctype="multipart/form-data">
        @csrf
        @foreach ($data as $key)
            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                    
            <div class="flex flex-1 px-3 py-3 h-14 bg-green-500 ">
                <div class="flex-1 no-underline font-bold text-2xl text-center text-black">
                    Profile Details
                </div>            
            </div>

                </div>
            </div>

            <div class="">
                <label class="block text-sm text-gray-00" for="cus_name">Profile Picture</label>

                <img src="{{ $key->avatar }}" alt="User Profile Picture"
                    style="height:300px; border-radius:50%;     margin: 10px auto 20px;">

            </div>
            <div class="">
                <label class="block text-sm text-gray-00" for="cus_name">Profile Picture</label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                    name="avatar" type="file" aria-label="Name">
            </div>

            <div class="">
                <label class="block text-sm text-gray-00" for="cus_name">Name</label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                    name="name" type="text" required="" value="{{ $key->name }}" aria-label="Name">
            </div>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="block text-sm text-gray-00" for="cus_name">IC Number</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="ic" type="text" required=""
                    value="{{ $key->IC_Number }}" disabled aria-label="Name">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="block text-sm text-gray-00" for="cus_name">Age</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="age" type="text" required=""
                    value="{{ $key->Age }}" disabled aria-label="Name">
            </div>

            <div class="">
                <label class="block text-sm text-gray-00" for="cus_name">Phone Number</label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                    name="number" type="text" required="" value="{{ $key->Phone_Number }}" aria-label="Name">
                    <p class="text-red-500 text-xs italic">Phone Number Format: 0XX-XXXX-XXXX</p>
            </div>
            <div class="">
                <label class="block text-sm text-gray-00" for="cus_name">Permanent Address</label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                    name="address" type="text" required="" value="{{ $key->Address }}" aria-label="Name">
            </div>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="block text-sm text-gray-00" for="cus_name">Date Of Birth</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="dob" type="text" required=""
                    value="{{ $key->Date_Of_Birth }}" disabled aria-label="Name">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="block text-sm text-gray-00" for="cus_name">Gender</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="dob" type="text" required=""
                    value="{{ $key->Gender }}" disabled aria-label="Name">
            </div>
            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="block text-sm text-gray-00" for="cus_name">Weight</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="weight" type="text" required=""
                    value="{{ $key->Weight }}" disabled aria-label="Name">
            </div>
            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="block text-sm text-gray-00" for="cus_name">Blood Group</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="blood" type="text" required=""
                    value="{{ $key->Blood_Group }}" disabled aria-label="Name">
            </div>
            {{-- <div class="">
            <label class="block text-sm text-gray-00" for="cus_name">Email Address</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="email" type="email" required=""
                value="{{ $key->email }}" disabled aria-label="Name">
        </div> --}}


            <div class="inline-block mt-2 w-1/2 pr-1">
                <label class="block text-sm text-gray-00" for="cus_name">Secret Question</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="question" type="text" required=""
                    value="{{ $key->Secret_Question }}" disabled aria-label="Name">
            </div>

            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                <label class="block text-sm text-gray-00" for="cus_name">Secret Question Answer</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="health" type="text" required=""
                    value="{{ $key->QuesAnswer }}" disabled aria-label="Name">
            </div>


            <div class="">
                <label class="block text-sm text-gray-00" for="cus_name">Family Contact Number</label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                    name="familyNumber" type="text" required="" value="{{ $key->Family_Contact }}" aria-label="Name">
                    <p class="text-red-500 text-xs italic">Phone Number Format: 0XX-XXXX-XXXX</p>
            </div>
            <div class="">
                <label class="block text-sm text-gray-00" for="cus_name">Family Contact Name</label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                    name="familyName" type="text" required="" value="{{ $key->Family_Contact_Name }}" aria-label="Name">
            </div>

        @endforeach


        <br>
        <br>
        <button class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-500 rounded">
            Update Profile
        </button>
        <br>
        <br>
    </form>



@endsection
