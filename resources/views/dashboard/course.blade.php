<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Courses Dashboard</title>
</head>

<body class="bg-gray-100 p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold">Courses</h1>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700">
            + New Course
        </button>
    </div>

    <!-- Filters & Search -->
    <div class="flex justify-between items-center mb-6">
        <div class="space-x-4 text-gray-600 font-medium">
            <a href="#" class="text-blue-600 border-b-2 border-blue-600 pb-1">All</a>
            <a href="#">Mine</a>
            <a href="#">Pending approval</a>
            <a href="#">Published</a>
            <a href="#">Draft</a>
            <a href="#">Trash</a>
        </div>
        <div class="flex items-center space-x-3">
            <input type="text" placeholder="Search course" class="border rounded-lg px-4 py-2 w-64">
            <button class="text-blue-600">Show filters</button>
        </div>
    </div>
    <!-- Course Table -->
    <div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Course ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created By
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created At
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Edit
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            001
                        </th>
                        <td class="px-6 py-4">
                            flutter
                        </td>
                        <td class="px-6 py-4">
                            death
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            admin
                        </td>
                        <td class="px-6 py-4">
                            Thu 13 Mar 4:54pm
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 hover:underline">Edit</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-red-600 hover:underline">Delete</a>
                        </td>
                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            002
                        </th>
                        <td class="px-6 py-4">
                            flutter
                        </td>
                        <td class="px-6 py-4">
                            death
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            admin
                        </td>
                        <td class="px-6 py-4">
                            Thu 13 Mar 4:54pm
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 hover:underline">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
