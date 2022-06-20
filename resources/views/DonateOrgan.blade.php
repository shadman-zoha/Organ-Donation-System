@extends("MainPage")
@section('content')
    @foreach ($data as $key)


        @if (session()->has('message'))
            <div class="bg-green-300 mb-2 border border-green-300 text-green-600 px-4 py-3 rounded relative" role="alert">

                <span class="block sm:inline">Your Organ Donation Request is successfully completed.</span>
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



                <div class="flex flex-1 px-3 py-3 h-14 bg-blue-500 ">
                    <div class="flex-1 no-underline font-bold text-2xl text-center text-white">
                        Organ Donation
                    </div>
                </div>
                <div class="p-3">
                    <form action="{{ url('DonOrgan') }}" method="POST" class="w-full">
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
                                <label for="grid-password">
                                    Organ Name
                                </label>
                                <select name="organ_name" required=""
                                    class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey">
                                    <option value="" disabled selected>Choose </option>
                                    <option value="Adrenal glands"> Adrenal glands </option>
                                    <option value="Bladder (urinary)"> Bladder (urinary) </option>
                                    <option value="Bones"> Bones </option>
                                    <option value="Diaphragm (muscle of breathing)"> Diaphragm (muscle of breathing)
                                    </option>
                                    <option value="Eyes"> Eyes </option>
                                    <option value="Fallopian tubes"> Fallopian tubes </option>
                                    <option value="Gallbladder"> Gallbladder </option>
                                    <option value="Heart"> Heart </option>
                                    <option value="Joints"> Joints </option>
                                    <option value="Kidneys"> Kidneys </option>
                                    <option value="Liver"> Liver </option>
                                    <option value="Lungs"> Lungs </option>
                                    <option value="Pineal gland"> Pineal gland </option>
                                    <option value="Parathyroid glands"> Parathyroid glands </option>
                                    <option value="Prostate"> Prostate </option>
                                    <option value="Rectum"> Rectum </option>
                                    <option value="Salivary glands"> Salivary glands </option>
                                    <option value="Skin"> Skin </option>
                                    <option value="Spinal cord"> Spinal cord </option>
                                    <option value="Stomach"> Stomach </option>
                                    <option value="Teeth"> Teeth </option>
                                    <option value="Thymus gland"> Thymus gland </option>
                                    <option value="Thyroid"> Thyroid </option>
                                    <option value="Ureters"> Ureters </option>
                                    <option value="Blood cells"> Blood cells </option>
                                    <option value="Hair"> Hair </option>
                                    <option value="Ureters"> Ureters </option>
                                </select>

                            </div>
                            <div class="w-full px-3">
                                <label for="grid-password">
                                    Hospital Name
                                </label>
                                <select name="hospital_name" required=""
                                    class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey">
                                    <option value="" disabled selected>Choose </option>
                                    @foreach ($hospitals as $hospital)
                                        <option value="{{ $hospital->hospital_name }}"> {{ $hospital->hospital_name }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="w-full px-3">
                                <label for="grid-password">
                                    Type Of Donation
                                </label>
                                <select name="organ_type" required=""
                                    class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey">
                                    <option value="" disabled selected>Choose </option>
                                    <option value="After Death"> After Death </option>
                                    <option value="In Alive"> In Alive </option>

                                </select>

                            </div>

                            <div class="w-full px-3">
                                <label for="grid-password">
                                    Health Condition
                                </label>
                                <select name="health_condition" required=""
                                    class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey">
                                    <option value="" disabled selected>Choose </option>
                                    <option value="Good"> Good </option>
                                    <option value="Moderate"> Moderate </option>
                                    <option value="Risky"> Risky </option>
                                    <option value="Very Risky"> Very Risky </option>

                                </select>

                            </div>

                            <div class="w-full px-3">
                                <label for="grid-password">
                                    Are you facing any serious diseases?
                                </label>
                                <select name="diseases" required=""
                                    class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey">
                                    <option value="" disabled selected>Choose </option>
                                    <option value="Cancer"> Cancer </option>
                                    <option value="Chronic lower respiratory diseases"> Chronic lower respiratory diseases
                                    </option>
                                    <option value="Stroke"> Stroke </option>
                                    <option value="Alzheimer's disease"> Alzheimer's disease </option>
                                    <option value="Diabetes"> Diabetes </option>
                                    <option value="Influenza and pneumonia"> Influenza and pneumonia </option>
                                    <option value="Covid-19"> Covid-19 </option>
                                    <option value="HIV- AIDS"> HIV- AIDS </option>
                                    <option value="Others"> Others </option>
                                    <option value="No"> No </option>

                                </select>

                            </div>


                            <div class="w-full px-3">
                                <label for="grid-password">
                                    Have you ever had donate organ before?
                                </label>
                                <select name="donate_before" required=""
                                    class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey">
                                    <option value="" disabled selected>Choose </option>
                                    <option value="Yes"> Yes </option>
                                    <option value="No"> No </option>

                                </select>

                            </div>

                            <br>
                            <br>
                            <div class="w-full px-3">
                                <input type="checkbox" name="condition" value="Yes" required="">
                                <label for="condition" style="color: red"> I verify that the information given is true.
                                    Actions may be taken if the information given is false.</label><br>

                            </div>





                        </div>

                        <button
                            class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-500 rounded"
                            type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
