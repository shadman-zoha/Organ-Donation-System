@extends('MainPage')
@section('content')
    @foreach ($data as $key)


        @if (session()->has('message'))
            <div class="bg-red-300 mb-2 border border-red-300 text-red-dark px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Oops!</strong>
                <span class="block sm:inline">Your Older Password is incorrect.</span>
                <span class="absolute top-0 top-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
        @endif
        @if (session()->has('msg'))
            <div class="bg-green-300 mb-2 border border-green-300 text-green-600 px-4 py-3 rounded relative" role="alert">
                
                <span class="block sm:inline">Your Password has been changed successfully.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
        @endif
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                {{-- <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                    Setting
                </div> --}}


                <div class="flex flex-1 px-3 py-3 h-14 bg-green-500 ">
                    <div class="flex-1 no-underline font-bold text-2xl text-center text-black">
                        Setting
                    </div>            
                </div>
                <div class="p-3">
                    <form action="{{ url('ChangePass') }}" method="POST" class="w-full">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                    for="grid-first-name">
                                    Full Name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                    name="name" type="text" value="{{ $key->name }}" disabled>

                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                    for="grid-last-name">
                                    IC Number
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                    name="ic" type="text" value="{{ $key->IC_Number }}" disabled>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                    for="grid-password">
                                    Old Password
                                </label>
                                <input
                                    class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    name="OldPassword" type="password" placeholder="******************">

                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                    for="grid-password">
                                    New Password
                                </label>
                                <input
                                    class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    name="NewPassword" type="password" placeholder="******************">

                            </div>
                        </div>

                        <button
                            class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-500 rounded"
                            type="submit" class="btn btn-primary btn-lg btn-block">Change Password</button>

                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
