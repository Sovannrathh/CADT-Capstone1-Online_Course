<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-200 flex flex-col min-h-screen">

    <!-- Navbar -->
    @include('courses.course_layouts.navbar_course')
    
    <!-- Main content area -->
    <main class="bg-gray-100">
@yield('contentCourse')
    </main>


</body>

</html>
