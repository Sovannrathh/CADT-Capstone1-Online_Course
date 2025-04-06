<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200 flex flex-col min-h-screen">
    {{-- @include('layouts.navbar') --}}
    <!-- Navbar -->
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-8xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex shrink-0 items-center">
                        <a href="http://127.0.0.1:8000/"><img class="h-15 w-20" src="{{ asset('images/logo.png') }}"
                                alt="Logo"></a>
                    </div>
                    <div
                        class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button id="loginBtn" type="button" onclick="window.location.href='/login'"
                        class="bg-gray-500 text-white py-2 rounded-md hover:bg-gray-600">
                        <div>ចូលគណនី</div>
                    </button>
                </div>
                
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button id="signupBtn" type="button" onclick="window.location.href='/register'"
                        class="bg-gray-500 text-white py-2 rounded-md hover:bg-gray-600">
                        <div>ចុះឈ្មោះ</div>
                    </button>
                </div>
                
            </div>
        </div>

        <!-- Login Modal (Hidden by default) -->
        <div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white p-8 rounded-lg shadow-lg w-96 relative">
                <h2 class="text-2xl font-semibold text-center mb-4">ចូលគណនី</h2>

                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">អុីមែល</label>
                        <input name="email" type="email" id="email"
                            class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter your email">
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-700">លេខសម្ងាត់</label>
                        <input name="password" type="password" id="password"
                            class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter your password">
                    </div>

                    <div class="flex justify-between items-center">
                        <button type="submit"
                            class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-700">Login</button>
                    </div>
                </form>

                <button id="closeModal" class="absolute top-5 right-6 text-gray-500 hover:text-gray-700">
                    &times;
                </button>
            </div>
        </div>

        <!-- Sign Up Modal (Hidden by default) -->
        <div id="signupModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white p-8 rounded-lg shadow-lg w-96 relative">
                <h2 class="text-2xl font-semibold text-center mb-4">ចុះឈ្មោះ</h2>

                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">ឈ្មោះ</label>
                        <input type="text" id="name"
                            class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter your name">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">អុីមែល</label>
                        <input type="email" id="email"
                            class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter your email">
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-700">លេខសម្ងាត់</label>
                        <input type="password" id="password"
                            class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter your password">
                    </div>

                    <div class="flex justify-between items-center">
                        <button type="submit"
                            class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-700">ចុះឈ្មោះ</button>
                    </div>
                </form>

                <button id="closeSignupModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-2xl">
                    &times;
                </button>
            </div>
        </div>

        <script>
            // // JavaScript to handle modal visibility
            // const loginBtn = document.getElementById('loginBtn');
            // const loginModal = document.getElementById('loginModal');
            // const closeModal = document.getElementById('closeModal');

            // const signupBtn = document.getElementById('signupBtn');
            // const signupModal = document.getElementById('signupModal');
            // const closeSignupModal = document.getElementById('closeSignupModal');


            // // Show modal when login button is clicked
            // loginBtn.addEventListener('click', function() {
            //     loginModal.classList.remove('hidden');
            // });

            // // Hide modal when close button is clicked
            // closeModal.addEventListener('click', function() {
            //     loginModal.classList.add('hidden');
            // });

            // // Show Sign Up Modal 
            // signupBtn.addEventListener('click', function() {
            //     signupModal.classList.remove('hidden');
            // });

            // // Close Sign Up Modal 
            // closeSignupModal.addEventListener('click', function() {
            //     signupModal.classList.add('hidden');
            // });

            // // Hide modal if clicked outside the modal content
            // window.addEventListener('click', function(e) {
            //     if (e.target === loginModal) {
            //         loginModal.classList.add('hidden');
            //     }
            //     if (e.target === signupModal) {
            //         signupModal.classList.add('hidden');
            //     }
            // });
        </script>

        <!-- Mobile menu -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">វគ្គសិក្សា</a>
            </div>
        </div>
    </nav>



    <!-- Main content area -->
    <main class="flex-grow">
        <!-- Your main content goes here -->
        <div class="w-full h-[400px] bg-amber-400 mx-auto place-content-center my-0">
            {{-- @yield('contentMain') --}}
            <div class="container p-5 grid grid-cols-2 gap-5 md:flex-row ">
                <div class="grid grid-rows-2 justify-center">
                    <div class="w-[300px] sticky">
                        <blockquote class="text-center text-6xl font-semibold text-gray-900 italic px-4">
                            ទទួលបាន​
                            <span
                                class="relative inline-block before:absolute before:-inset-1 before:block before:-skew-y-3 before:bg-amber-500 m-3">
                                <span class="relative text-gray-50">ចំណេះ</span>
                            </span>
                            <span>ដឹងថ្មី</span>
                        </blockquote>
                    </div>

                    <div class="m-3">
                        <h1>សិក្សាតាម​ប្រព័ន្ធអនឡាញជាមួយពួកយេីងវគ្គសិក្សាខាងអាយធី​ដូចជាខាង​វិទ្យាសាស្ត្រកំុព្យូទ័រ​
                        </h1>
                        <h1>ផ្នែក design ផ្នែក Networking </h1>
                    </div>
                </div>
                <div class="bg-amber-400 w-[600px] h-[300px] place-content-center">
                    <img src="{{ asset('images/sidebar.png') }}" alt="senior photo">
                </div>
            </div>
            {{-- Sponsorship line --}}
            <div class="containe w-full h-[200px]">
                <div class="container  flex flex-col-2 p-4 justify-start">
                    <div class="container w-[200px] h-[125px]">
                        <p>ដៃគូសហការ</p>
                        <div class="size-20 flex-none">
                            <img src="{{ asset('images/moey.svg.png') }}" alt="moeys logo" class="w-[79px] h-[75px]">
                        </div>

                    </div>
                    <div class="size-14"></div>
                    <div class="">
                        
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container flex justify-stretch h-896 px-8">
            <div>អាស័យដ្ធាន ​: ភូមិត្រាំង ស្រុកបាគង ខេត្តសៀមរាប ស្រុកសៀមរាប </div>
            <div>

                <!-- Facebook -->
                <button type="button" data-twe-ripple-init data-twe-ripple-color="light"
                    class="mb-2 inline-block rounded bg-[#1877f2] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 320 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                            <path
                                d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                        </svg>
                    </span>
                </button>

                <!-- Instagram -->
                <button type="button" data-twe-ripple-init data-twe-ripple-color="light"
                    class="mb-2 inline-block rounded bg-[#c13584] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </span>
                </button>


                <!-- Telegram -->
                <button type="button" data-twe-ripple-init data-twe-ripple-color="light"
                    class="mb-2 inline-block rounded bg-[#0088cc] px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                    <span class="[&>svg]:h-4 [&>svg]:w-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 496 512">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                            <path
                                d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z" />
                        </svg>
                    </span>
                </button>
            </div>
            <div></div>


        </div>
    </footer>

    <script>
        document.getElementById("profileButton").addEventListener("click", function() {
            document.getElementById("profileMenu").classList.toggle("hidden");
        });

        document.getElementById("mobileMenuButton").addEventListener("click", function() {
            document.getElementById("mobileMenu").classList.toggle("hidden");
        });
    </script>
</body>

</html>
{{-- @extends('layouts.app') --}}

{{-- @section('contentMain')

@endsection --}}
