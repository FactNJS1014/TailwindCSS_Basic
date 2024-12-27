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
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
</head>

<body class="bg-zinc-950">

    <div class="h-screen w-screen flex bg-cover bg-center items-center justify-center"
        style="background-image: linear-gradient(rgb(0 0 0 / 60%),rgb(0 0 0 / 60%)), url('{{ asset('public/images/netflix.jpg') }}');">
        <div
            class="bg-black bg-opacity-40 items-center text-white max-w-sm sm:max-w-md m-auto py-8 px-8 sm:py-16 w-1/2">
            <div class="flex justify-center items-center">
                <img src="{{ asset('public/images/Netflix-Brand.webp') }}" alt="">
            </div>

            <section>
                <h3 class="text-4xl mb-5 flex items-center justify-center text-white">Sign In To Factflix</h3>

                <input type="email" placeholder="Email or phone number"
                    class="block w-full p-3 mb-5 rounded-md bg-zinc-900 placeholder:text-[#8c8c8c] ">

                <input type="password" placeholder="Password"
                    class="block w-full p-3 mb-5 rounded-md placeholder:text-[#8c8c8c] bg-zinc-900">

                <button type="submit" class="w-full mt-4 bg-red-600 p-2 rounded-lg block">Sign In</button>
                <span class="flex items-center justify-center m-4">Or</span>
                <button class="w-full mt-3 bg-zinc-800 p-2 rounded-lg block text-gray-300">Login with Coode</button>
                <a href="" class="flex items-center justify-center m-4 hover:underline">Forget password</a>
                <div class="flex justify-between pt-2 text-sm text-gray-400">
                    <div>
                        <input type="checkbox">
                        <label for="">Remember me</label>
                    </div>

                    <div class="hover:underline">Need help</div>
                </div>

                <div class="pt-3 text-md mt-3 text-gray-500 flex">
                    New to Factflix?
                    <a href="" class="hover:underline ms-2 text-white">Sign up now.</a>
                </div>

                <div class="text-gray-300 text-[13px] mt-4">
                    <p>This page is Demo for learning how to clone Netflix by Fact</p>
                    <a href="" class="hover:underline text-blue-600">Learn more.</a>
                </div>
            </section>
        </div>

    </div>

</body>

</html>
