<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | Talentix</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 h-screen flex flex-col">
    <div class="flex flex-col flex-grow items-center justify-center">
        <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
            <div class="mb-8">
                <h2 class="text-lg font-semibold">Reset Password</h2>
            </div>

            <p class="text-sm text-gray-600 mb-6">Enter your email address below, and we'll send you instructions to reset your password.</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-7">
                    <label for="email" class="font-semibold">Email Address</label>
                    <input
                        type="email"
                        name="email"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow focus:outline-none focus:ring focus:ring-green-300"
                        placeholder="address@mail.com"
                        required>
                </div>

                <button type="submit" class="w-full px-4 py-2 font-medium text-white bg-primary rounded-lg hover:bg-primary-dark focus:outline-none focus:bg-primary-dark">
                    Send Reset Link
                </button>
            </form>

            <p class="mt-6 text-sm font-semibold">
                Remembered your password? <a href="{{ route('login') }}" class="text-primary hover:underline">Sign in</a>
            </p>
        </div>
    </div>
    <footer class="mt-auto mb-8 text-sm text-center text-gray-600">
        <p class="font-medium text-slate-500">
            <a href="#" class="hover:underline mr-[15px]">Privacy Policy</a>
            <a href="#" class="hover:underline">Terms & Conditions</a>
            <a href="#" class="hover:underline ml-[15px]">Contact Us</a>
        </p>
    </footer>
</body>




</html>