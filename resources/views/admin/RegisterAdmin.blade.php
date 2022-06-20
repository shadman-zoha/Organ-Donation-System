@extends('admin.layout.AdminDashboard')
@section('admincontent')
<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
    <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
            Admin Registration
        </div>
        <div class="bg-gray-100 p-3">
            <form action="/adminregister" method="post" class="w-full">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for="grid-first-name">
                            Admin Name
                        </label>
                        <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                               name="name" type="text" placeholder="Enter name">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                               for="grid-password">
                            Email
                        </label>
                        <input class="appearance-none block w-full text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                               name="email" type="email" placeholder="Create a password">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                               for="grid-password">
                            Password
                        </label>
                        <input class="appearance-none block w-full text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                               name="password" type="password" placeholder="Create a password">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                               for="grid-password">
                            Hospital Name
                        </label>
                        <input class="appearance-none block w-full text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                               name="hospital_name" type="text" placeholder="Enter hospital name">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                               for="grid-password">
                            Hospital Contact Number
                        </label>
                        <input class="appearance-none block w-full text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                               name="hospital_contact_number" type="text" placeholder="Enter hospital contact number">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                               for="grid-city">
                            City
                        </label>
                        <input class="appearance-none block w-full text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                               name="city" type="text" placeholder="Enter city">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                               for="grid-state">
                            State
                        </label>
                        <div class="relative">
                            <select class="block appearance-none w-full border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    name="state">
                                <option>Johor</option>
                                <option>Kedah</option>
                                <option>Kelantan</option>
                                <option>Melaka</option>
                                <option>Negeri Sembilan</option>
                                <option>Pahang</option>
                                <option>Perak</option>
                                <option>Perlis</option>
                                <option>Sabah</option>
                                <option>Sarawak</option>
                                <option>Selangor</option>
                                <option>Terengganu</option>
                                <option>Kuala Lumpur</option>
                                <option>Labuan</option>
                                <option>Putrajaya</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                               for="grid-zip">
                            Zip
                        </label>
                        <input class="appearance-none block w-full text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                               name="zipcode" type="text" placeholder="Enter Zip code">
                    </div>
                </div>
                <div class="border rounded-lg bg-green-200 md:w-1/4 mx-1 my-3 p-3">
                    <button class="font-mono font-bold text-center text-lg">
                        Register Administrator
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection