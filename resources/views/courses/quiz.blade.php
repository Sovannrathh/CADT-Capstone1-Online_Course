<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Science Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header Section -->
    <div class="bg-yellow-500 p-6 text-center shadow-lg rounded-b-lg">
        <h1 class="text-4xl font-semibold text-white">កម្មវិធីសិក្សាតាមប្រព័ន្ធអនឡាញ</h1>
        <p class="mt-2 text-lg text-white opacity-80">តេស្តមើលវិទ្យាសាស្ត្រទិន្នន័យ</p>
    </div>

    <!-- Quiz Section -->
    <div class="max-w-3xl mx-auto py-16 px-6">
        <a href="{{route('coursepay')}}" class="text-blue-600 text-lg font-medium hover:underline mb-8 inline-block">&larr; ទៅត្រឡប់</a>

        <!-- Quiz Card -->
        <div class="bg-yellow-200 rounded-lg shadow-xl overflow-hidden p-8 mb-8 transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <h2 class="text-3xl font-semibold mb-4 text-gray-800">តើវិទ្យាសាស្ត្រទិន្នន័យគឺជាអ្វី?</h2>
            <form id="quizForm">
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio h-5 w-5 text-yellow-500" name="answer" value="data">
                        <span class="ml-2 text-lg text-gray-800">វិភាគ</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio h-5 w-5 text-yellow-500" name="answer" value="code">
                        <span class="ml-2 text-lg text-gray-800">វៃកូដ</span>
                    </label>
                </div>
                <div class="mb-6">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio h-5 w-5 text-yellow-500" name="answer" value="knowledge">
                        <span class="ml-2 text-lg text-gray-800">ដឹង</span>
                    </label>
                </div>
                <button type="submit" class="bg-black hover:bg-gray-800 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transform transition duration-300 hover:scale-105">
                    បញ្ជូន
                </button>
            </form>
            <p id="result" class="mt-4 text-green-600 hidden text-xl font-semibold">ត្រឹមត្រូវ</p>
            <p id="errorMessage" class="mt-4 text-red-600 hidden text-lg">ចម្លើយមិនត្រឹមត្រូវ សូមព្យាយាមម្តងទៀត</p>
        </div>

        <!-- Next Button -->
        <div class="flex justify-end">
            <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transform transition duration-300 hover:scale-105">
                បន្ត
            </button>
        </div>
    </div>

    <script>
        document.getElementById('quizForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const selectedAnswer = document.querySelector('input[name="answer"]:checked');
            const resultDisplay = document.getElementById('result');
            const errorMessage = document.getElementById('errorMessage');

            if (selectedAnswer && selectedAnswer.value === 'data') { // Assuming 'data' is the correct answer
                resultDisplay.classList.remove('hidden');
                resultDisplay.classList.add('block');
                errorMessage.classList.add('hidden');
            } else {
                resultDisplay.classList.add('hidden');
                resultDisplay.classList.remove('block');
                errorMessage.classList.remove('hidden');
                errorMessage.classList.add('block');
            }
        });
    </script>

</body>
</html>
