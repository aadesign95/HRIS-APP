<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Talentix</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 h-screen flex flex-col">
    <div class="flex flex-col flex-grow items-center justify-center">
        <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold">Welcome to Talentix</h2>
            <p class="text-gray-600 mb-6">Effortless HR Management at Your Fingertips.</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="font-semibold">Email Address</label>
                    <input
                        type="email"
                        name="email"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow focus:outline-none focus:ring focus:ring-green-300"
                        placeholder="address@mail.com"
                        required>
                </div>
                <div class="mb-2 relative">
                    <label for="password" class="font-semibold">Password</label>
                    <button type="button" class="absolute top-0 right-0 flex items-center px-2 text-l font-semibold text-blue-500">Show</button>
                    <input
                        type="password"
                        name="password"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow focus:outline-none focus:ring focus:ring-green-200"
                        placeholder="Placeholder"
                        required>
                </div>
                <div class="mb-4">
                    <a href="{{ route('password.request') }}" class="text-sm text-slate-500 font-normal hover:underline">Forget Password?</a>
                </div>
                <button type="submit" class="w-full px-4 py-2 font-medium text-white bg-primary rounded-lg hover:bg-primary-dark focus:outline-none focus:bg-primary-dark">
                    Sign In
                </button>
            </form>

            <p class="mt-6 text-sm font-semibold">
                Don’t have an account? <a href="{{ route('register') }}" class="text-green-500 hover:underline">Create One</a>
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