<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Login Page</title>
</head>

<body>

    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="relative flex flex-col m-6 space-y-8 bg-white rounded-xl shadow-2xl md:flex-row md:space-y-0">
            <div class="flex flex-col justify-center p-10 space-y-2">
                <img src="{{ asset('public/images/tailwind.png') }}" alt=""
                    class="w-20 h-20 object-contain mb-6">
                <span class="text-4xl font-semibold">Login to Dashboard</span>
                <span class="font-light text-gray-300 text-center">Please enter your details</span>

                <div class="py-2">
                    <span class="mb-2 text-md">Email</span>
                    <input type="text" placeholder="Enter your mail"
                        class="w-full p-3 rounded-md focus:ring-0 focus:border-none border border-gray-300 placeholder:font-light place-holder:text-gray-500">
                </div>
                <div class="py-2">
                    <span class="mb-2 text-md">Password</span>
                    <input type="password" placeholder="Enter your password"
                        class="w-full p-3 rounded-md focus:ring-0 focus:border-none border border-gray-300 placeholder:font-light place-holder:text-gray-500">
                </div>

                <div class="flex justify-between w-full py-4">
                    <div class="mr-24">
                        <input type="checkbox" class="w-4 h-3">
                        <span class="ml-2 text-md">Remember me</span>
                    </div>
                    <span>Forgot Password</span>
                </div>
                <button class="bg-black text-white rounded-lg p-2 text-semibold">
                    Log in
                </button>
                {{-- <a href="https://www.flaticon.com/free-icons/google" title="google icons">Google icons created by Freepik - Flaticon</a> --}}
                <button class="w-full bg-black text-white rounded-lg p-2 text-semibold mt-3">
                    <img class="w-6 h-6 inline mr-2" src="{{ asset('public/images/google.png') }}" alt="Login Google">
                    Login with Google
                </button>

                <div class="text-center text-gray-500 mt-2">
                    <span>Don't have an account?</span>
                    <a href="#" class="text-black hover:text-gray-600">Sign up</a>
                </div>
            </div>
            <div class="relative">
                <img src="{{ asset('public/images/ilya.jpg') }}" alt=""
                    class="w-[400px] h-full hidden md:block rounded-r-xl object-cover">

                <div class="absolute  bottom-10 right-6 p-6 bg-white bg-opacity-0 backdrop-blur-sm drop-shadow-lg">
                    <span class="text-white text-xl">Login to management your Project<br>
                        <span class="text-cyan-400 text-md">Enjoy your Coding With Kobdemy</span></span>

                </div>

            </div>
        </div>
    </div>

</body>

</html>
