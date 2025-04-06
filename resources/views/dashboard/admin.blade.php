<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Dashboard</title>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-yellow-400 p-5 space-y-4 hidden md:block">
            <h2 class="text-xl font-bold">ចុះឈ្មោះ</h2>
            {{-- <ul class="space-y-2 border-cyan-300">
                <li class="text-gray-800">📂 ផ្ទាំងគ្រប់គ្រង</li>
                <li class="text-gray-800">📚 វគ្គសិក្សា</li>
                <li class="text-gray-800">📜​ ផ្ទុកវីឌីអូ </li>
                <li class="text-gray-800">📝 បង់ប្រាក់គ្រូ</li>
                <li class="text-gray-800">📜 ប្រាក់សិស្សបង់</li>
            </ul> --}}
            <ul class="space-y-2">
                <li class="opcion-con-desplegable">
                    <div class="flex items-center justify-between p-2 hover:bg-gray-400">
                        <div class="flex items-center">
                            <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                📂 ផ្ទាំងគ្រប់គ្រង
                            </a>
                            {{-- <span>ផ្ទាំងគ្រប់គ្រង</span> --}}
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-2 hover:bg-gray-400">
                        <div class="flex items-center">
                            <a href="{{route('dashboard_new_course')}}" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                📚 វគ្គសិក្សា
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-2 hover:bg-gray-400">
                        <div class="flex items-center">
                            <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                📜 ផ្ទុកវីឌីអូ
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-2 hover:bg-gray-400">
                        <div class="flex items-center">
                            <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                📝 ផ្ទាំងគ្រប់គ្រង
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-2 hover:bg-gray-400">
                        <div class="flex items-center">
                            <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                📜 បង់ប្រាក់គ្រូ
                            </a>
                        </div>
                    </div>
                    </ul>
                </li>
            </ul>
        </aside>


        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Nav -->
            <nav class="bg-black text-white p-4 flex justify-between items-center">
                <button class="md:hidden text-white text-2xl">☰</button>
                <!-- Mobile Menu Button -->
                <input type="text" placeholder="Search" class="px-4 py-2 rounded-md text-black w-full md:w-auto" />
                <div class="flex items-center space-x-4">
                    <button type="button" onclick="window.location.href='{{ route('notification') }}'"
                        class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">

                        <span class="absolute -inset-1.5"></span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>


                    </button>
                    {{-- <span>⚙️</span> --}}
                    {{-- Profile button --}}
                    <div
                        class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <div
                            class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <form action="">
                                        <button type="button"
                                            onclick="window.location.href='{{ route('dashboard_admin_profile') }}'"
                                            class="relative flex rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                            <span class="absolute -inset-1.5"></span>
                                            <span class="sr-only">Open user menu</span>
                                            <img class="size-8 rounded-full"
                                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                        </button>
                                    </form>

                                </div>
                                {{-- 1 --}}

                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Dashboard Content -->
            <div class="p-6 space-y-6">
                <!-- Stats & Upcoming -->
                <div class="grid grid-cols-3 gap-4">
                    {{-- <div class="bg-white p-4 shadow rounded-lg">
                        <h3 class="text-lg font-bold">សមិទ្ធផល</h3>
                        <canvas id="performanceChart" class="h-32"></canvas>
                    </div> --}}
                    <div class="bg-white p-4 shadow rounded-lg col-span-2">
                        <h3 class="text-lg font-bold">ថ្នាក់ដែលបានចុះឈ្មោះ</h3>
                        <ul>
                            <li class="py-2">📖 Cloud Computing Essentials - 5:30pm</li>
                            <li class="py-2">📱 Mobile App Development Trends - 2:30pm ✅</li>
                        </ul>
                    </div>
                </div>

                <!-- Courses -->
                <div>
                    <h3 class="text-lg font-bold">ថ្នាក់ដែលបានចុះឈ្មោះថ្មីៗ</h3>
                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Learn Data Analysis</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Learn Figma UI Design</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Ethical Hacking & Security</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Learn Data Analysis</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Learn Figma UI Design</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Ethical Hacking & Security</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Learn Data Analysis</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Learn Figma UI Design</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Ethical Hacking & Security</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('performanceChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Performance Score',
                    data: [5, 6, 7.5, 8, 10, 5, 6.5],
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    barThickness: 30,
                    maxBarThickness: 40
                }]
            },
            options: {
                responsive: false,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 10
                    },
                    x: {
                        barPercentage: 1,
                        categoryPercentage: 1
                    }
                }
            }
        });
    </script>
</body>

</html>
