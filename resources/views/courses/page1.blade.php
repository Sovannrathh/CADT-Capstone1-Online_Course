<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Data Analytics Course</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header Section -->
    <div class="bg-yellow-500 p-6 text-center shadow-lg rounded-b-lg">
        <h1 class="text-4xl font-semibold text-white">កម្មវិធីសិក្សាតាមប្រព័ន្ធអនឡាញ</h1>
        <p class="mt-2 text-lg text-white opacity-80">សិក្សាព័ត៌មានវិទ្យាជំរើសមួយដែលអាចពង្រឹងសមត្ថភាពក្នុងការវិភាគទិន្នន័យ</p>
    </div>

    <!-- Course Overview Section -->
    <div class="max-w-5xl mx-auto py-16 px-6">
        <a href="{{ route('coursevideo') }}" class="text-blue-600 text-lg font-medium hover:underline mb-8 inline-block">&larr; ត្រឡប់ទៅវិញ</a>

        <div class="bg-white rounded-lg shadow-xl overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <div class="relative">
                <img src="https://priyadogra.com/wp-content/uploads/2023/05/data-science-training-in-jalandhar.png" alt="Data Analytics Pyramid" class="w-full h-full object-cover rounded-t-lg">
                <div class="absolute inset-0 bg-black bg-opacity-25 flex items-center justify-center text-center text-white opacity-0 hover:opacity-100 transition-opacity duration-300">
                    <span class="text-2xl font-semibold">ស្វែងយល់ពីអំណាចនៃការវិភាគទិន្នន័យ</span>
                </div>
            </div>

            <div class="p-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-3">វគ្គសិក្សាព័ត៌មានវិទ្យា(Advanced Data Analytics Course)</h2>
                <p class="text-lg text-gray-600 mb-6">វគ្គសិក្សានេះផ្តោតទៅលើការវិភាគទិន្នន័យដោយប្រើឧបករណ៍ និង បច្ចេកទេសទំនើប ដែលធ្វើឲ្យអ្នកត្រៀមខ្លួនសម្រាប់ការវិភាគទិន្នន័យជាក់ស្តែង</p>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>សិក្សាអំពីការបញ្ជូលទិន្នន័យ និងការកែសម្រួលទិន្នន័យ</li>
                    <li>ស្វែងយល់ពីបច្ចេកទេសវិភាគទិន្នន័យជំរើសខ្ពស់</li>
                    <li>ជំនាញក្នុងការប្រើម៉ូឌែលអនាគត និងការបង្ហាញទិន្នន័យ</li>
                    <li>មានបទពិសោធន៍ជាមួយ Python និងឧបករណ៍ផ្សេងទៀត</li>
                </ul>
            </div>
        </div>

        <div class="mt-12 flex justify-end">
            <a href="{{ route('page2') }}">
            <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transform transition duration-300 hover:scale-105">
                បន្ត
            </button>
        </a>
        </div>
    </div>


</body>
</html>
