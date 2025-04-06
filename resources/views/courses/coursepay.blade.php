<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-gray-100">

    <div class="max-w-3xl mx-auto py-8 px-4">
        <div class="flex justify-between items-center mb-8">
            <a href="coursepage.blade.php" class="text-blue-600 font-semibold">&larr; Go Back to Home Page</a>
            <h2 class="text-xl font-semibold">Course Overview</h2>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="relative group">
                <a href="{{ route('coursevideo') }}" class="block">
                    <img src="https://datascientest.com/en/files/2024/09/Data-Science-video.png" alt="Course Video" class="w-full h-auto group-hover:opacity-80 transition duration-300">
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300">
                        <i data-lucide="play-circle" class="text-white text-6xl"></i>
                    </div>
                </a>
            </div>
            <div class="p-6">
                <!-- Take the Quiz Button -->
                <a href="#" class="block bg-yellow-500 p-4 rounded-md mb-4 flex items-center transition duration-300 shadow-md">
                    <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center mr-4">
                        <i data-lucide="book-open" class="text-yellow-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white">Take the Quiz</h3>
                </a>

                <!-- View Documentation Button -->
                <a href="#" class="block bg-blue-500 p-4 rounded-md flex items-center transition duration-300 shadow-md">
                    <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center mr-4">
                        <i data-lucide="file-text" class="text-blue-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white">View Documentation</h3>
                </a>
            </div>
        </div>

        <div class="mt-8 flex justify-end">
            <button class="bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-lg flex items-center shadow-lg transition duration-300">
                <i data-lucide="credit-card" class="mr-2"></i> next
            </button>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
