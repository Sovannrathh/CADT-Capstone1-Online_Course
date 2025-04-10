@extends('courses.course_layouts.app_course')
@section('title', 'Courses')
@section('contentCourse')
<div class="mb-4 border-b border-gray-200">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
        data-tabs-toggle="#default-tab-content" role="tablist">
        <li class="me-2" role="presentation">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-blue-400 hover:border-gray-300"
                id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                aria-controls="dashboard" aria-selected="false">All Category</button>
        </li>
        <li class="me-2" role="presentation">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-blue-400 hover:border-gray-300"
                id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                aria-controls="settings" aria-selected="false">Data Science</button>
        </li>
        <li role="presentation">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-blue-400 hover:border-gray-300"
                id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                aria-controls="contacts" aria-selected="false">Cloud Computing</button>
        </li>
    </ul>
</div>
{{-- List of Course  --}}
<div class="flex justify-center">
    <div class="grid grid-cols-4 gap-4 md:grid-rows-6">
    {{-- 1 --}}
<!-- Card -->
<div class="block w-[300px] mx-5 rounded-lg bg-white shadow-lg text-center">
    
    <!-- Card image -->
    <a href="{{ route('coursedetails') }}">
        <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
        alt="" />
        </a>

        <!-- Card header -->
        <div class="border-b-2 border-neutral-100 px-6 py-4">
            <h5 class="flex items-center justify-center text-neutral-500">
                <span class="mr-2">
                    Featured
                </span>
                <span
                class="inline-block whitespace-nowrap rounded-[0.27rem] bg-blue-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-blue-700">
                Popular
                </span>
            </h5>
        </div>

        <!-- Card body -->
        <div class="p-6">

            <!-- Title -->
            <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800">
                Explore the hidden beauty
            </h5>
            
            <!-- Button -->
            <a href="{{ route('coursedetails') }}"
            class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
            Book now
        </a>
        
    </div>
    
</div>
<!-- Card 1 end-->
    {{-- 2 --}}
    <!-- Card -->
    <div class="block w-[300px] mx-5 rounded-lg bg-white shadow-lg text-center">

        <!-- Card image -->
        <a href="{{ route('coursedetails') }}">
            <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
                alt="" />
        </a>

        <!-- Card header -->
        <div class="border-b-2 border-neutral-100 px-6 py-4">
            <h5 class="flex items-center justify-center text-neutral-500">
                <span class="mr-2">
                    Featured
                </span>
                <span
                    class="inline-block whitespace-nowrap rounded-[0.27rem] bg-blue-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-blue-700">
                    New
                </span>
            </h5>
        </div>

        <!-- Card body -->
        <div class="p-6">

            <!-- Title -->
            <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800">
                Explore the hidden beauty
            </h5>

            <!-- Button -->
            <a href="#"
                class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                Book now
            </a>
        </div>
    </div>
    {{-- card 2 end --}}
    {{-- 1 --}}
    <!-- Card -->
    <div class="block w-[300px] mx-5 rounded-lg bg-white shadow-lg text-center">

        <!-- Card image -->
        <a href="#!">
            <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
                alt="" />
        </a>

        <!-- Card header -->
        <div class="border-b-2 border-neutral-100 px-6 py-4">
            <h5 class="flex items-center justify-center text-neutral-500">
                <span class="mr-2">
                    Featured
                </span>
                <span
                    class="inline-block whitespace-nowrap rounded-[0.27rem] bg-blue-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-blue-700">
                    New
                </span>
            </h5>
        </div>

        <!-- Card body -->
        <div class="p-6">

            <!-- Title -->
            <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800">
                Explore the hidden beauty
            </h5>

            <!-- Button -->
            <a href="#"
                class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                Book now
            </a>

        </div>

    </div>
    <!-- Card 3 end-->
    {{-- 4 --}}
    <!-- Card -->
    <div class="block w-[300px] mx-5 rounded-lg bg-white shadow-lg text-center">

        <!-- Card image -->
        <a href="#!">
            <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
                alt="" />
        </a>

        <!-- Card header -->
        <div class="border-b-2 border-neutral-100 px-6 py-4">
            <h5 class="flex items-center justify-center text-neutral-500">
                <span class="mr-2">
                    Featured
                </span>
                <span
                    class="inline-block whitespace-nowrap rounded-[0.27rem] bg-blue-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-blue-700">
                    New
                </span>
            </h5>
        </div>

        <!-- Card body -->
        <div class="p-6">

            <!-- Title -->
            <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800">
                Explore the hidden beauty
            </h5>

            <!-- Button -->
            <a href="#"
                class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                Book now
            </a>

        </div>

    </div>
    <!-- Card 4 end-->
    {{-- 5 --}}
    <!-- Card -->
    <div class="block w-[300px] mx-5 rounded-lg bg-white shadow-lg text-center">

        <!-- Card image -->
        <a href="#!">
            <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
                alt="" />
        </a>

        <!-- Card header -->
        <div class="border-b-2 border-neutral-100 px-6 py-4">
            <h5 class="flex items-center justify-center text-neutral-500">
                <span class="mr-2">
                    Featured
                </span>
                <span
                    class="inline-block whitespace-nowrap rounded-[0.27rem] bg-blue-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-blue-700">
                    New
                </span>
            </h5>
        </div>

        <!-- Card body -->
        <div class="p-6">

            <!-- Title -->
            <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800">
                Explore the hidden beauty
            </h5>

            <!-- Button -->
            <a href="#"
                class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                Book now
            </a>

        </div>

    </div>
    <!-- Card 5 end-->
    {{-- 6 --}}
    <!-- Card -->
    <div class="block w-[300px] mx-5 rounded-lg bg-white shadow-lg text-center">

        <!-- Card image -->
        <a href="#!">
            <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
                alt="" />
        </a>

        <!-- Card header -->
        <div class="border-b-2 border-neutral-100 px-6 py-4">
            <h5 class="flex items-center justify-center text-neutral-500">
                <span class="mr-2">
                    Featured
                </span>
                <span
                    class="inline-block whitespace-nowrap rounded-[0.27rem] bg-blue-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-blue-700">
                    New
                </span>
            </h5>
        </div>

        <!-- Card body -->
        <div class="p-6">

            <!-- Title -->
            <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800">
                Explore the hidden beauty
            </h5>

            <!-- Button -->
            <a href="#"
                class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                Book now
            </a>

        </div>

    </div>
    <!-- Card 6 end-->
</div>
</div>
@endsection