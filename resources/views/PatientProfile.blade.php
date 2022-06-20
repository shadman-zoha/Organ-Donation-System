@extends('MainPage')
@section('content')


    <div>
        <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="UpdateProfile"
            style="color: green">

            Do you want to update your profile ?
        </a>
    </div>
    <br>


    @foreach ($data as $key)
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
           

            <div class="flex flex-1 px-3 py-3 h-14 bg-yellow-500 ">
                <div class="flex-1 no-underline font-bold text-2xl text-center text-black">
                    Profile Details
                </div>            
            </div>
        </div>

        <div class="">
            <label class="block text-sm text-gray-00" for="cus_name">Profile Picture</label>

            <img src="{{ $key->avatar }}" alt="User Profile Picture"
                style="height:300px; border-radius:50%;     margin: 10px auto 20px;">

        </div>

        <div class="">
            <label class="block text-sm text-gray-00" for="cus_name">Name</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="name" type="text" required=""
                value="{{ $key->name }}" disabled aria-label="Name">
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
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="number" type="text" required=""
                value="{{ $key->Phone_Number }}" disabled aria-label="Name">
        </div>
        <div class="">
            <label class="block text-sm text-gray-00" for="cus_name">Permanent Address</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="address" type="text" required=""
                value="{{ $key->Address }}" disabled aria-label="Name">
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


        <div class="inline-block mt-2 w-1/2 pr-1">
            <label class="block text-sm text-gray-00" for="cus_name">Family Contact Number</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="familyNumber" type="text" required=""
                value="{{ $key->Family_Contact }}" disabled aria-label="Name">
        </div>
        <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
            <label class="block text-sm text-gray-00" for="cus_name">Family Contact Name</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="familyName" type="text" required=""
                value="{{ $key->Family_Contact_Name }}" disabled aria-label="Name">
        </div>
        <br>
        <br>

    @endforeach




@endsection
