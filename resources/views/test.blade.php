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
    <title>Notification History</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex">

    <aside class="bg-white w-64 p-4 flex flex-col">
        <nav class="flex-grow">
            <ul class="space-y-2">
                <li><a href="#" class="flex items-center space-x-2 p-2 rounded-md hover:bg-gray-100"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg><span>Notifications</span></a></li>
            </ul>
        </nav>
    </aside>

    <div class="flex-grow flex flex-col">
        <header class="bg-gray-800 text-white p-4 flex items-center justify-between">
            <h1 class="text-lg font-semibold">Notification History</h1>
        </header>

        <main class="p-6">
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
        </main>
    </div>
<div>
    {{-- test.blade.php --}}
@foreach($users as $user)
<div>
    <h2>{{ $user->full_name }}</h2>
    <p>{{ $user->email }}</p>
</div>
@endforeach
</div>
</body>
</html>
</body>
</html>