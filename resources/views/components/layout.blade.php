<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elearning</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar></x-navbar>
            <div class="mb-4 border-b border-gray-200">
                <form action="{{ route('courses.index') }}" method="get">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                    role="tablist">
                     <!-- Button for All Category -->
        <li><button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-blue-400 hover:border-gray-300" type="submit" name="category" value="*">All Category</button></li>
        
        <!-- Button for Data Science Category -->
        <li><button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-blue-400 hover:border-gray-300" type="submit" name="category" value="Data Science">Data Science</button></li>
        
        <!-- Button for Cloud Computing Category -->
        <li><button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-blue-400 hover:border-gray-300" type="submit" name="category" value="Cloud Computing">Cloud Computing</button></li>
                    {{-- <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-amber-400 hover:border-gray-300"
                            id="all-course-id" type="button" role="tab"
                            >All Category</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-amber-400 hover:border-gray-300"
                            id="ds-id"type="button" role="tab"
                             >Data Science</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-amber-400 hover:border-gray-300"
                            id="cloud-id"  type="button" role="tab"
                             >Cloud Computing</button>
                    </li> --}}
                </ul>
            </form>
            </div>
    {{$slot}}
</body>
</html>