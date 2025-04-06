<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Science គឺជាអ្វី?</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header Section -->
    <div class="bg-yellow-500 p-6 text-center shadow-xl rounded-b-lg">
        <h1 class="text-4xl font-semibold text-white">កម្មវិធីសិក្សាតាមប្រព័ន្ធអនឡាញ</h1>
        <p class="mt-2 text-lg text-white opacity-80">ការយល់ដឹងអំពីមូលដ្ឋាននៃ Data Science</p>
    </div>

    <!-- Course Section -->
    <div class="max-w-3xl mx-auto py-16 px-6">
        <a href="{{ route('page1') }}" class="text-blue-600 text-lg font-medium hover:underline mb-8 inline-block">&larr; ទៅត្រឡប់</a>

        <!-- Course Overview Card -->
        <div class="bg-white rounded-lg shadow-xl overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <div class="relative">
                <img src="https://ptgmedia.pearsoncmg.com/digital/video_lessons/clips/9780135687161/pfds_00_00_00_00.jpg" alt="Data Science" class="w-full h-96 object-cover rounded-t-lg">
                <div class="absolute inset-0 bg-black bg-opacity-25 flex items-center justify-center text-center text-white opacity-0 hover:opacity-100 transition-opacity duration-300">
                    <span class="text-2xl font-semibold">Data Science គឺជាអ្វី?</span>
                </div>
            </div>

            <div class="p-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Data Science គឺជាអ្វី?</h2>
                <p class="text-lg text-gray-600 mb-6">Data Science គឺជាផ្នែកអន្តរប្រទេសដែលប្រើវិធីសាស្ត្រពីវិទ្យាសាស្ត្រ កូដ និងប្រព័ន្ធផ្សេងៗ ដើម្បីទាញយកចំណេះដឹង និងទិដ្ឋភាពពីទិន្នន័យដែលបានរចនា និងមិនបានរចនា។</p>
                <p class="text-lg text-gray-600 mb-6">ផ្នែកនេះសម្របសម្រួលជំនាញនៅក្នុងវិទ្យាសាស្ត្រទិន្នន័យ កូដ និងចំណេះដឹងដែលទាក់ទងទៅវិស័យផ្សេងៗ ដើម្បីដោះសោភាពចលនារបស់បញ្ហា និងដំណោះស្រាយបញ្ហាទិន្នន័យ។</p>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>វិភាគទិន្នន័យធំៗដើម្បីរកឃើញនូវនិន្នាការនិងរូបរាង</li>
                    <li>អនុវត្តអាល់ហ្គូរិថមសម្រាប់ការទាយថាសាស្ត្រ</li>
                    <li>បង្កើតម៉ូដែលទិន្នន័យដើម្បីដោះសោភាពអាជីព</li>
                    <li>ប្រើប្រាស់ឧបករណ៍បង្ហាញទិន្នន័យសម្រាប់បង្ហាញចំណេះដឹង</li>
                </ul>
            </div>
        </div>

        <div class="mt-12 flex justify-end">
            <a href="{{ route('page3') }}">
            <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transform transition duration-300 hover:scale-105">
                បន្ត
            </button>
        </a>
        </div>
    </div>

    <!-- Footer Section -->

</body>
</html>
