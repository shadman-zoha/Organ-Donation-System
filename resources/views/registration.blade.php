<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/dist/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <style>
        .login {
            background: url('./assets/dist/images/OrganLogin.jpg')
        }

    </style>
    <title>Register</title>
</head>

<body class="h-screen font-sans login bg-cover">
    <div class="container mx-auto  flex flex-1 justify-center items-center">

        <div style="line-height: 1;">
            @if (session()->has('message'))
                <div class="bg-red-300 mb-2 border border-red-300 text-red-dark px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Oops!</strong>
                    <span class="block sm:inline">Your Infromation is incorrect. Please fill all the information
                        properly!!</span>
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

            <link rel="icon" type="image/x-icon" href="./assets/home/assets/favicon.ico" />

            <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>

            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"
                type="text/css" />
            <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
                type="text/css" />

            <link href="./assets/home/css/styles.css" rel="stylesheet" />
            <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav" style=" height: 5%;">
                <div class="container">
                    <a class="navbar-brand" href="/"><font size="5">Organ donation</font></a>
            
                </div>
            </nav>
            <br>
            <br>
          




            <form action="signup" method="POST" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl"
                enctype="multipart/form-data" style="background-color: lavender">
                @csrf

                <p class="text-gray-800 font-medium text-center text-lg font-bold">Register</p>
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">Name</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="name" type="text"
                        required="" placeholder="Your Name" aria-label="Name">
                </div>
                <div class="inline-block mt-2 w-1/2 pr-1">
                    <label class="block text-sm text-gray-00" for="cus_name">IC Number</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="ic" type="text" required=""
                        placeholder="Your IC Number" aria-label="Name">
                </div>
                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                    <label class="block text-sm text-gray-00" for="cus_name">Age</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="age" type="number"
                        required="" placeholder="Your Age" aria-label="Name">
                </div>

                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">Phone Number</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="number" type="tel"
                        pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" required="" placeholder="0XX-XXXX-XXXX" aria-label="Name">
                    <p class="text-red-500 text-xs italic">Phone Number Format: 0XX-XXXX-XXXX</p>
                </div>
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">Permanent Address</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="address" type="text"
                        required="" placeholder="Your Address" aria-label="Name">
                </div>
                <div class="inline-block mt-2 w-1/2 pr-1">
                    <label class="block text-sm text-gray-00" for="cus_name">Date Of Birth</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="dob" type="date" required=""
                        aria-label="Name">
                </div>
                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                    <label class="block text-sm text-gray-00" for="cus_name">Gender</label>
                    <select class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="gender" required="">
                        <option value="" disabled selected>Choose your Gender</option>
                        <option value="Male"> Male </option>
                        <option value="Female"> Female </option>

                    </select>
                </div>
                <div class="inline-block mt-2 w-1/2 pr-1">
                    <label class="block text-sm text-gray-00" for="cus_name">Weight</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="weight" type="number"
                        step="0.01" required="" placeholder="Your Weight" aria-label="Name">
                </div>

                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                    <label class="block text-sm text-gray-00" for="cus_name">Blood Group</label>
                    <select class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="blood" required="">
                        <option value="" disabled selected>Choose Blood Group</option>
                        <option value="(A+)"> (A+) </option>
                        <option value="(A-)"> (A-) </option>
                        <option value="(B+)"> (B+) </option>
                        <option value="(B-)"> (B-) </option>
                        <option value="(O+)"> (O+) </option>
                        <option value="(O-)"> (O-) </option>
                        <option value="(AB+)"> (AB+) </option>
                        <option value="(AB-)"> (AB-) </option>

                    </select>
                </div>

                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">Email Address</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="email" type="email"
                        required="" placeholder="Your Email" aria-label="Name">
                </div>
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">Password</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="password" type="password"
                        required="" placeholder="Make a Password" aria-label="Name">
                </div>
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">Profile Picture</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="avatar" type="file"
                        aria-label="Name">
                </div>

                <div class="inline-block mt-2 w-1/2 pr-1">
                    <label class="block text-sm text-gray-00" for="cus_name">Secret Question</label>
                    <select class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="question" required="">
                        <option value="" disabled selected>Your secret question</option>
                        <option value="What was your first pet?"> What was your first pet? </option>
                        <option value="In what city were you born?"> In what city were you born? </option>
                        <option value="What was your childhood nickname?"> What was your childhood nickname? </option>
                        <option value="What was the model of your first car?"> What was the model of your first car?
                        </option>

                    </select>
                </div>
                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                    <label class="block text-sm text-gray-00" for="cus_name">Secret Question Answer</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="QuesAnswer" type="text"
                        required="" placeholder="Your Answer" aria-label="Name">
                </div>

                <div class="inline-block mt-2 w-1/2 pr-1">
                    <label class="block text-sm text-gray-00" for="cus_name">Family Contact Number</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="familyNumber" type="tel"
                        pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" required="" placeholder="0XX-XXXX-XXXX" aria-label="Name">
                    <p class="text-red-500 text-xs italic">Phone Number Format: 0XX-XXXX-XXXX</p>
                </div>
                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                    <label class="block text-sm text-gray-00" for="cus_name">Family Contact Name</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="familyName" type="text"
                        required="" placeholder="Family Name" aria-label="Name">
                        <p class="text-red-500 text-xs italic">Family contact Full Name</p>
                </div>



                <div class="mt-4">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                        type="submit">Register</button>
                </div>
                <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800"
                    href="login">
                    Already have an account ?
                </a>
            </form>
        </div>

    </div>

</body>

</html>
