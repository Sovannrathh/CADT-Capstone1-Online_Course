<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Courses</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    <div class="bg-blue-400 p-6 text-center shadow-lg">
        <h1 class="text-3xl font-semibold text-white">កម្មវិធីសិក្សាតាមប្រព័ន្ធអនឡាញ</h1>
    </div>

    <!-- Content -->
    <div class="max-w-7xl mx-auto py-12 px-6" x-data="{ showModal: false, videoUrl: '' }">
        <a href="{{ route('coursedetails', ['course_id' => $course_id]) }}" class="text-blue-600 mb-8 inline-block text-lg font-medium hover:underline">&larr; ត្រឡប់ទៅវិញ</a>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($lessons as $lesson)
                <div @click="showModal = true; videoUrl = '{{ $lesson->video_url }}'"
                     class="cursor-pointer bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="relative">
                        <img src="https://img.youtube.com/vi/{{ basename($lesson->video_url) }}/0.jpg" alt="Thumbnail"
                             class="w-full h-48 object-cover">
                        <div class="absolute inset-0 bg-black opacity-25"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-white text-xl font-bold">
                            ▶
                        </div>
                    </div>
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-2">{{ $lesson->title }}</h2>
                        <p class="text-blue-500 font-semibold">ចុចដើម្បីមើលវីដេអូ</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Modal -->
        <div x-show="showModal" 
             class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-70 z-50"
             x-transition>
            <div class="bg-white rounded-lg overflow-hidden shadow-lg max-w-3xl w-full relative">
                <button @click="showModal = false; videoUrl = ''"
                        class="absolute top-2 right-2 text-gray-600 hover:text-black text-2xl font-bold">
                    &times;
                </button>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe x-bind:src="videoUrl" frameborder="0" allowfullscreen
                            class="w-full h-96"></iframe>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
