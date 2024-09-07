<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Talentix</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 h-screen flex flex-col">
    <div class="flex flex-col flex-grow items-center justify-center">
        <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold">Create your account</h2>
            <p class="text-gray-600 mb-6">Join Talentix Today and Streamline Your HR Processes!</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="font-semibold">Full Name</label>
                    <input
                        type="email"
                        name="email"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow focus:outline-none focus:ring focus:ring-green-300"
                        placeholder="address@mail.com"
                        required>
                </div>

                <div class="mb-4">
                    <label for="email" class="font-semibold">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow focus:outline-none focus:ring focus:ring-green-300"
                        placeholder="address@mail.com"
                        required>
                </div>

                <div class="mb-4">
                    <label for="password" class="font-semibold">Password</label>
                    <input
                        type="password"
                        name="password"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow focus:outline-none focus:ring focus:ring-green-300"
                        placeholder="Placeholder"
                        required>
                </div>

                <div class="mb-4">
                    <label for="cpassword" class="font-semibold">Confirm Password</label>
                    <input
                        type="cpassword"
                        name="cpassword"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow focus:outline-none focus:ring focus:ring-green-300"
                        placeholder="Placeholder"
                        required>
                </div>

                <div class="mb-4">
                    <label for="phoneNumber" class="font-semibold">Phone Number</label>
                    <input
                        type="phoneNumber"
                        name="phoneNumber"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow focus:outline-none focus:ring focus:ring-green-300"
                        placeholder="admin@mail.com"
                        required>
                </div>

                <div class="mb-4">
                    <label for="company" class="font-semibold">Company</label>
                    <input
                        type="company"
                        name="company"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow focus:outline-none focus:ring focus:ring-green-300"
                        placeholder="admin@mail.com"
                        required>
                </div>

                <div class="flex items-center mb-5">
                    <input
                        type="checkbox"
                        id="agree"
                        name="terms"
                        class="mr-2 h-7 w-7 text-primary rounded-md border-gray-300  focus:outline-none focus:ring-0 shadow"
                        required>
                    <label for="agree" class="text-xs text-gray-700">
                        I agree with
                        <a href="#" class="text-blue-500 hover:underline">Terms & Conditions</a>
                        and
                        <a href="#" class="text-blue-500 hover:underline">Privacy Policy</a>.
                    </label>
                </div>


                <button type="submit" class="w-full px-4 py-2 font-medium text-white bg-primary rounded-lg hover:bg-primary-dark focus:outline-none focus:bg-primary-dark">
                    Sign Up
                </button>
            </form>

            <p class="mt-6 text-sm font-semibold">
                Already have an account? <a href="{{ route('login') }}" class="text-primary hover:underline">Sign in</a>
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