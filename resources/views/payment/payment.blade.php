<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script async
                            src="https://js.stripe.com/v3/buy-button.js">
                          </script>
</script>
</head>

<body class="h-screen flex">

    <div class="w-1/2 flex flex-col bg-black text-white text-2xl space-y-4">
        <div>
            <p class="m-4">Course: Data Analysis</p>
        </div>
        <div>
            <img class="w-[90%] h-60 m-5"
                src="data:image/jpeg;base64,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"
                alt="">
        </div>
        <div class="mx-auto w-[90%]">
            <table class="w-full border-collaps border-gray-300">
                <tbody>
                    <tr>
                        <td>Price:</td>
                        <td>10 USD</td>
                    </tr>
                    {{-- <tr>
                        <td>Discount:</td>
                        <td>20%</td>
                    </tr> --}}
                    <tr>
                        <td>Total:</td>
                        <td>8 USD</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


    <div class="w-1/2 bg-black flex flex-col text-black text-2xl space-y-4">
        <div class="m-5 w-[90%] h-screen bg-gray-200 p-4 shadow-lg">
            <div>
                <p class="text-center">Personal Details</p>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="#" method="POST">
                    <div>
                        <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
                        <div class="mt-2">
                            <input type="name" name="name" id="name" autocomplete="name" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                    {{-- <div>
                        <div class="mt-10 flex items-center justify-between">
                            <label for="phonenum" class="block text-sm/6 font-medium text-gray-900">Phone Number</label>
                        </div>
                        <div class="mt-2">
                            <input type="phonenum" name="phonenum" id="phonenum" autocomplete="current-phonenum"
                                required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div> --}}

                        <div>
                            <label for="email" class="mt-10 block text-sm/6 font-medium text-gray-900">Email
                                address</label>
                            <div class="mt-2">
                                <input type="email" name="email" id="email" autocomplete="email" required
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div>
                            <label for="payment"
                                class="mt-10 block text-sm/6 font-medium text-gray-900">Payment  Credut/Debut Card</label>
                            {{-- <label class="flex items-center gap-2">
                                <input type="radio" name="payment" value="qr" class="w-4 h-4">
                                KHQR
                            </label> --}}
                            {{-- <label class="flex items-center gap-2">
                                <input type="radio" name="payment" value="card" class="w-4 h-4">
                                Credit/Debit Card
                            </label> --}}
                        </div>
                        {{-- Button to submit the payment --}}
                        <div>
                            {{-- <form action="{{ route('card') }}" method="GET">
                                <button name="hello" type="submit"
                                    class="mt-10 flex w-full justify-center rounded-md bg-yellow-500 px-3 py-1.5 text-sm/6 font-semibold text-black shadow-xs hover:bg-yellow-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Pay
                                </button>
                            </form> --}}
                            
                          <stripe-buy-button
                            buy-button-id="buy_btn_1R1VOdGbn5BKJhTQJtUAfmrk"
                            publishable-key="pk_test_51R1ToZGbn5BKJhTQIoLrvwMwHd67bwdVzB2cbkdGmw6jyvfP6Ig8jtmG938J0vP8wM9ESS6PnoBxbX3FzGEzTYHx00LjrcaqUp"
                          >
                          </stripe-buy-button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
