{{-- @extends('courses.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Show Note</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('courses.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong> <br/>
                    {{ $note->title }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>contents:</strong> <br/>
                    {{ $course->content }}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection --}}
<x-layout>
    {{-- <h1>{{$course->title}}</h1> --}}
    <div class="max-w-3xl mx-auto py-8 px-4">
        <div class="flex justify-between items-center mb-8">
            <a href="{{route('courses.index')}}" class="text-blue-600 font-semibold">&larr; Go Back to Home Page</a>
            <h2 class="text-xl font-semibold">Course Overview</h2>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            
            <div class="p-6">
                <!-- Take the Quiz Button -->
                <a href="{{route('quiz')}}" class="block bg-yellow-500 p-4 rounded-md mb-4 flex items-center transition duration-300 shadow-md">
                    <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center mr-4">
                        <i data-lucide="book-open" class="text-yellow-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white">Take the Quiz</h3>
                </a>

                <!-- View Documentation Button -->
                <a href="{{route('documents.store')}}" class="block bg-blue-500 p-4 rounded-md flex items-center transition duration-300 shadow-md">
                    <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center mr-4">
                        <i data-lucide="file-text" class="text-blue-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white">View Documentation</h3>
                </a>
            </div>
        </div>

        {{-- <div class="mt-8 flex justify-end">
            <button class="bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-lg flex items-center shadow-lg transition duration-300">
                <i data-lucide="credit-card" class="mr-2"></i> <a href="{{route('coursevideo')}}">next</a>
            </button>
        </div> --}}
        <div class="p-6">

            <a href="{{route('coursevideo', ['course_id'=>$course->id])}}" class="bg-green-500 hover:bg-green-600 text-white font-semibold  py-3 px-6 rounded-lg flex items-center shadow-lg transition duration-300">
                <h3 class="text-lg font-semibold ">Next</h3>
            </a>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</x-layout>
