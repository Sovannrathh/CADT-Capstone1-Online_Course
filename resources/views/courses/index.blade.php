<x-layout>
    {{-- <h1>Post index page</h1> --}}
    {{-- {{ $coursename }} --}}
    {{-- <ul>
        <li>{{$category[0]}}</li>
        <li>{{$category[0]}}</li>
        <li>{{$category[0]}}</li>
    </ul> --}}
    {{-- @foreach ($category as $c)
        <li>{{$c}}</li>
       
    @endforeach --}}
    @foreach ($courses as $course)
    {{-- <p><strong>Category:</strong> {{ $course['category'] }}</p> --}}
        {{-- List of Course  --}}
        {{-- 1 --}}
        <!-- Card -->
        
        <div class="flex justify-center">
            <div class="grid grid-cols-4 gap-4 md:grid-rows-6">
                <div class="block w-[300px] mx-5 rounded-lg bg-white shadow-lg text-center">
                    <!-- Card image -->
                    <a href="{{ route('coursedetails', ['course_id' => $course->id]) }}">
                        <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
                            alt="" />
                    </a>
                    <!-- Card header -->
                    

                    <!-- Card body -->
                    <div class="p-6">

                        <!-- Title -->
                        <h5
                            class="card-title mb-2 text-xl font-bold tracking-wide text-neutral-800">
                            {{ $course->title }}
                        </h5>
                        <p class="card-text ">{{ $course->description }}</p>
                        <p class="card-text "><strong>Price:</strong> ${{ $course->price }}</p>
                        <!-- Button -->
                        <a href="{{ route('coursepay',['course_id' => $course->id]) }}"
                            class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                            Book now
                        </a>

                    </div>
                </div>
            </div>
            <!-- Card 1 end-->
@endforeach
</x-layout>
