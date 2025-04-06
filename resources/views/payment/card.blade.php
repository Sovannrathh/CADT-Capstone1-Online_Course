<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Form</title>
    @vite(['resources/css/app.css'])
</head>

<body class="flex items-center justify-center min-h-screen bg-black p-5">

    <div class="bg-gray-300 p-6 rounded-lg shadow-lg w-96">
     
        <label for="card-number" class="block mb-2 text-sm font-medium text-gray-700">Card Number</label>
        <input type="text" id="card-number" placeholder="XXXX XXXX XXXX XXXX"
            class="w-full p-2.5 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500"
            maxlength="19" required>

        <label for="card-holder" class="block mt-4 mb-2 text-sm font-medium text-gray-700">Cardholder Name</label>
        <input type="text" id="card-holder" placeholder="FULL NAME"
            class="w-full p-2.5 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500"
            required>

        <div class="flex space-x-4 mt-4">

            <div class="w-1/2">
                <label for="expiry-date" class="block mb-2 text-sm font-medium text-gray-700">Expiration Date</label>
                <input type="text" id="expiry-date" placeholder="MM/YY"
                    class="w-full p-2.5 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500"
                    maxlength="5" required>
            </div>

       
            <div class="w-1/2">
                <label for="cvv" class="block mb-2 text-sm font-medium text-gray-700">CVV</label>
                <input type="text" id="cvv" placeholder="123"
                    class="w-full p-2.5 border border-gray-300 rounded-lg text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500"
                    maxlength="3" required>
            </div>
        </div>
        <button type="submit"
            class="mt-4 w-full bg-yellow-500 text-white p-2.5 rounded-lg hover:bg-yellow-400">
            Submit
        </button>
    </div>

</body>

</html>
