<!DOCTYPE html>
<html lang="km">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ការកំណត់ទំព័រឯកសារ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <header class="bg-gray-200 p-4 text-center">
        <h1 class="text-lg font-semibold">ការកំណត់ទំព័រឯកសារ</h1>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <nav class="w-1/5 bg-blue-500 text-white p-4">
            <ul>
                <li class="mb-4">
                    <a href="#" class="flex items-center px-4 py-2 bg-gray-200 text-black rounded hover:bg-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        ព័តមានផ្ទាល់ខ្លួន
                    </a>
                </li>
                {{-- <li class="mb-4">
                    <a href="{{route('dashboard')}}" class="flex items-center px-4 py-2 bg-gray-200 text-black rounded hover:bg-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        ចាកចេញ
                    </a>
                </li> --}}
                <li class="mb-4">
                    <a href="{{route('logout')}}" class="flex items-center px-4 py-2 bg-gray-200 text-black rounded hover:bg-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        ចាកចេញ
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="w-4/5 bg-white p-8">
            <section class="flex flex-col items-center">
                <!-- Profile Picture -->
                <div class="relative">
                    <img id="profile-img" src="https://via.placeholder.com/120" alt="Profile Picture" class="w-32 h-32 rounded-full border-4 border-blue-500">
                    <button onclick="document.getElementById('file-input').click();" class="absolute bottom-2 right-2 bg-blue-500 text-white p-1 rounded-full">
                        ✎
                    </button>
                    <!-- Hidden file input for image upload -->
                    <input type="file" id="file-input" class="hidden" accept="image/*" onchange="previewImage(event)">
                </div>

                <!-- Personal Information -->
                <form class="mt-6 w-full max-w-md">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold">ឈ្មោះ</label>
                        <input type="text" value="" class="w-full p-2 border rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold">ភេទ</label>
                        <select class="w-full p-2 border rounded">
                            <option selected>ប្រុស</option>
                            <option>ស្រី</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold">ថ្ងៃកំណើត</label>
                        <input type="date" value="30-05-2004" class="w-full p-2 border rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold">អាសយដ្ឋាន</label>
                        <textarea class="w-full p-2 border rounded"></textarea>
                    </div>

                    <!-- Save Button -->
                    <button type="submit" class="w-full px-6 py-2 bg-blue-500 text-white rounded hover:bg-yellow-600">
                        រក្សាទុក
                    </button>
                </form>
            </section>
        </main>
    </div>

    <script>
        // Function to preview the uploaded image
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('profile-img');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>

</html>
