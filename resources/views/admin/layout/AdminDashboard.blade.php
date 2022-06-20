<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="./assets/dist/styles.css">
    <link rel="stylesheet" href="./assets/dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Dashboard | Admin</title>
</head>

<body>
    <!--Container -->
    <div class="mx-auto bg-grey-400">
        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            <header class="bg-nav">
                <div class="flex justify-between">
                    <div class="p-1 mx-3 inline-flex items-center">
                        <h1 class="text-white p-2">Admin Dashboard</h1>
                    </div>
                    <div>
                        <h5><a href="logout" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a>
                        </h5>
                    </div>
                </div>
            </header>
            <!--/Header-->

            <div class="flex flex-1">
                <!--Sidebar-->
                <aside id="sidebar"
                    class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                    <ul class="list-reset flex flex-col">
                        <li class=" w-full h-full py-3 px-2 border-b border-light-border hover:bg-white">
                            <a href="/admin"
                                class="font-sans font-hairline hover:font-normal text-md text-nav-item no-underline">
                                Home
                                <span><i class="fas fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-light-border hover:bg-white">
                            <a href="/adminregister"
                                class="font-sans font-hairline hover:font-normal text-md text-nav-item no-underline">
                                Register an administrator
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-light-border hover:bg-white">
                            <a href="/AdminView"
                                class="font-sans font-hairline hover:font-normal text-md text-nav-item no-underline">
                                Message From Patients
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                    </ul>

                </aside>
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-white-300 flex-1 p-3 overflow-hidden"> 
                    @yield('admincontent')
                </main>

            </div>
        </div>
    </div>

    <script src="./main.js"></script>
</body>

</html>
