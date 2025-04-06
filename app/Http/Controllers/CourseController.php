<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\error;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     
    public function index(Request $request)
    {

        // $course = 'data science';
        $age = 32;
        // $allcourses=['c1','c2','c3'];
        
        $courseId = $request->query('id');
        $allCourses = Course::all();
        
        // If category is provided, filter the courses
        
        $foundCourse = null;

        // Get the requested course ID from query parameters
        $courseId = $request->query('id');
        $courseCategory = $request->query('title');

        

    
        // Search for the course by ID if provided
        if ($courseId) {
            $foundCourse = $allCourses->firstWhere('id', $courseId);
       
            $foundCourse = [$foundCourse];
        }
        else {
            // Clean the category value
            $cleanCategory = strtolower(str_replace('+', ' ', trim($courseCategory)));

            if ($cleanCategory === '*') {
                $foundCourse = $allCourses;
            } else {
                $foundCourse = $allCourses->where('category', $cleanCategory);
            }
        }

        if (!$foundCourse) {
            return response()->json(['error' => '404, Not Found'], 404);
        }

        return view('courses.index', [
            'age' =>$age, 
            'courses' => $foundCourse, // Keeping it consistent with the old function
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        if ($user->is_admin) {
            return view('courses.create');
        }
        return error('Not allowed').with(401);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "<script>console.log('Debug Objects: " . $request . "' );</script>";
        $fields = $request->validate([
            'title'=> ['required','string','max:255'],
            'description'=> ['required','string','max:255'],
            'price' => ['required','numeric','min:0'],
        ]);

        
        // $fields['user_id'] = $request->user()->id();
        $fields['user_id'] = 1;

        $course = Course::create($fields);

        $course->lessons()->create([
            'title'=>$request->input('lesson_name'),
            'video_url'=>$request->input('video_url'), // TEMP
        ]); // Temp

        // if ($request->lesson_titles) {
        //     foreach($request->input('lesson_titles') as $index => $lesson_title) {
        //         $video_url = $request->input('video_url')[$index] ?? 'https://youtu.be/dQw4w9WgXcQ?si=h_Q0P78nLIxSqF9Y'; 

        //         $course->lessons()->create([
        //             'title' => $lesson_title,
        //             'video_url' => $video_url,
        //         ]);
        //     }
        // }

        return redirect('courses/')->with('success','Course added');
    }

    /**
     * Display the specified resource.
     * //Course $course
     */
    public function show()
    {
        return view('courses.show');
    }

    /**
     * Show the form for editing the specified resource.
     * Course $course
     */
    public function edit()
    {
        return view('courses.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * Course $course
     */
    public function destroy()
    {
        //
    }
}
