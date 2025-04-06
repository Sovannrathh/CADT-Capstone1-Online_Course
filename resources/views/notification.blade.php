<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form with Tailwind CSS</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100 h-screen flex flex-col">

        <header class="bg-gray-800 text-white p-4">
            <div class="flex flex-row justify-between">
            <div class="flex">
                <a href="{{ route('dashboard') }}" class="mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill='none' viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                
            </div>
            <div class="flex justify-center"><h1 class="text-lg font-semibold flex-grow text-center">ការជូនដំណឹង</h1></div>
            <div></div>
        </div>
            
        </header>

        <div class="flex-grow flex items-center justify-center p-4">
            <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">

                <div class="space-y-4">
                    <div class="bg-gray-200 h-10 rounded-md"></div>
                    <ul class="space-y-4">
                        <li class="bg-white rounded-md shadow-md p-4 flex items-start">
                            <div class="mr-4">
                                <span class="text-sm text-gray-500">10:30 AM</span>
                            </div>
                            <div>
                                <p class="font-semibold">New user registered!</p>
                                <p class="text-gray-600">A new user named John Doe has registered.</p>
                            </div>
                        </li>
                        <li class="bg-white rounded-md shadow-md p-4 flex items-start">
                            <div class="mr-4">
                                <span class="text-sm text-gray-500">09:15 AM</span>
                            </div>
                            <div>
                                <p class="font-semibold">Payment received.</p>
                                <p class="text-gray-600">Payment of $100 received from User ID 123.</p>
                            </div>
                        </li>
                        <li class="bg-white rounded-md shadow-md p-4 flex items-start">
                            <div class="mr-4">
                                <span class="text-sm text-gray-500">08:00 AM</span>
                            </div>
                            <div>
                                <p class="font-semibold">System update completed.</p>
                                <p class="text-gray-600">The system update was successfully completed.</p>
                            </div>
                        </li>
                        </ul>
                </div>

            </div>
        </div>

    </body>

    </html>
</body>

</html>
