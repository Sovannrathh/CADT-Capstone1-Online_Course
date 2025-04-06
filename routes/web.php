<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;



Route::get('/dashboard', function () {
    // Check if the user is authenticated
    $user = Auth::user();
    if ($user->is_admin) {
        return view('./dashboard/admin');
    }

    // If the user is not an admin, redirect to the courses view
    return redirect()->route('courses.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// .
// Map_payment
// .
Route::get('/payment', function () {
    return view('/payment/payment');
})->name('payment');

Route::get('/card', function () {
    return view('/payment/card');
})->name('card');

Route::get('/success', function () {
    return view('/payment/success');
});
// .
//
//
// .
Route::get('/', function () {
    return view('mainpage');
});

// Route::get('/test', [UserController::class, 'index']);

// Route::get('/test', function () {
//     return view('test');
// });
// Route::get('/test', function () {
//     return view('test');
// });

Route::get('/profile', function () {
    return view('components.profile');
})->name('profile');

// Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
// Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');


Route::get('/notification', function () {
    return view('notification');
})->name('notification');
// .
// Map_dashboard
// .
Route::get('/dashboard', function () {
    // Check if the user is authenticated
    $user = Auth::user();
    if ($user->is_admin) {
        return view('./dashboard/admin');
    }

    // If the user is not an admin, redirect to the courses view
    return redirect()->route('courses.index');
})->name('dashboard');
Route::view('/dashboard/courses', './dashboard/course')->name('dashboard_course');
// Route::resource('courses', CourseController::class);
// Route::get('/testingCRUDcourse', [CourseController::class, 'index'])->name('courses.index');
Route::get('/dashboard/courses/new_course', function() {
    $user = Auth::user();
    if ($user->is_admin) {
        return view('./dashboard/new_course');
    }
    return response()->json(['error' => 'Resource not found'], 404);
})->name('dashboard_new_course');
Route::get('/dashboard/profile', function () {
    return view('./dashboard/admin_profile');
})->name('dashboard_admin_profile');    
// .    
//
// .


// .
// Map_course
// .
// Route::get('/courses', function () {
//     return view('courses/coursepage');
// })->name('courses.coursepage');
Route::resource('/courses', CourseController::class);


Route::get('courses/coursedetails/{course_id}', function ($id) {
    $course = Course::findOrFail($id);
    return view('courses.show', ['course'=>$course]);
})->name('coursedetails');

Route::get('courses/coursepay', function () {
    return view('courses/coursepay');
})->name('coursepay');

Route::get('courses/coursepay/coursevideo/{course_id}', function ($id) {
        $lessons = Lesson::where('course_id', $id)->get(); // Just an example filter
    $lessonCount = $lessons->count(); // Get total number of lessons

    return view('courses/coursevideo', [
        'lessons' => $lessons,
        'lessonCount' => $lessonCount,
        'course_id'=>$id
    ]);
})->name('coursevideo');

Route::get('/page1', function () {
    return view('courses/page1');
})->name('page1');

Route::get('/page2', function () {
    return view('courses/page2');
})->name('page2');

Route::get('courses/coursepay/quiz', function () {
    return view('courses/quiz');
})->name('quiz');

Route::get('/page3', function () {
    return view('courses/page3');
})->name('page3');
// .
//
// .

// .
// Map_Document
// .
// Route::get('/documents/{id}', [DocumentController::class, 'show'])->name('documents.show');
Route::post('/documents/upload', [DocumentController::class, 'create'])->name('documents.create');
Route::get('/documents', [DocumentController::class, 'store'])->name('documents.store');


Route::get('/lesson/{id}', function ($id) {
    $lesson = Lesson::findOrFail($id);
    return view('lessons.show', compact('lesson'));
});
