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
               
                @foreach ($dataP as $key)


                <link href="./assets/home/css/styles.css" rel="stylesheet" />
                <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav" style=" height: 5%;">
                    <div class="container">
                        <a class="navbar-brand" href="/"><font size="5">Organ donation</font></a>
                
                    </div>
                </nav>

                <form action="ForgotPassChange" method="post" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl"
                    style="background-color: lavender">
                    @csrf
                    <p class="text-gray-800 font-medium text-center text-lg font-bold">Forgot Password</p>
                    <div class="">
                      
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="id" type="hidden"
                            required="" value="{{ $key->id }}"  aria-label="email">
                    </div>
                    <div class="">
                        <label class="block text-sm text-gray-00" for="username">Question</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="Question" type="text"
                            required="" value="{{ $key->Secret_Question }}" disabled aria-label="email">
                    </div>
                    <div class="">
                        <label class="block text-sm text-gray-00" for="username">Answer</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="answer" type="text"
                            required="" placeholder="Answer" aria-label="email">
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-00" for="password">New Password</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="Newpassword"
                            type="password" required="" placeholder="*******" aria-label="password">
                    </div>
                    
                    <div class="mt-4 items-center justify-between">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                            type="submit">Change Password</button>

                    </div>
                  
                </form>

            </div>
        </div>
    </div>
    @endforeach
</body>

</html>
