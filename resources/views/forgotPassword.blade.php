<!doctype html>
<html lang="en">

<head>
    <title>Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/dist/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <style>
        .login {
            background: url('./assets/dist/images/OrganLogin.jpg')
        }

    </style>
</head>

<body class="h-screen font-sans login bg-cover">

    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
                @if (session()->has('message'))
                    <div class="bg-red-300 mb-2 border border-red-300 text-red-dark px-4 py-3 rounded relative"
                        role="alert">
                        <strong class="font-bold">Oops!</strong>
                        <span class="block sm:inline">This email does not exist.</span>
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
                @if (session()->has('messg'))
                <div class="bg-red-300 mb-2 border border-red-300 text-red-dark px-4 py-3 rounded relative"
                    role="alert">
                    
                    <span class="block sm:inline">Your Answer in incorrecrt!! Please put the correct Answer.</span>
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


                <link href="./assets/home/css/styles.css" rel="stylesheet" />
                <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav"
                    style=" height: 5%;">
                    <div class="container">
                        <a class="navbar-brand" href="/">
                            <font size="5">Organ donation</font>
                        </a>

                    </div>
                </nav>

                <form action="forgotpass" method="post" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl"
                    style="background-color: lavender">
                    @csrf
                    <p class="text-gray-800 font-medium text-center text-lg font-bold">Forgot Password</p>
                    <div class="">
                        <label class="block text-sm text-gray-00" for="username">Email</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="email" type="email"
                            required="" placeholder="User Email" aria-label="email">
                    </div>

                    <div class="mt-4 items-center justify-between">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                            type="submit">Continue</button>

                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>
