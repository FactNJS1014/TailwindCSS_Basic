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
    <title>Delivery</title>
</head>

<body>
    <nav class="flex justify-center items-center h-20 bg-[#01b14f]">
        <div class="bg-white w-5/6 h-10 rounded-lg shadow-xl flex overflow-hidden">
            <button class="flex items-center px-2 rounded-r-lg bg-gray-100 text-gray-400">
                <span><i class="fa-solid fa-qrcode"></i></span>
            </button>
            <input type="text" placeholder="ค้นหาเมนูโปรดของคุณ" class="w-full text-center focus:outline-none">
        </div>
    </nav>
    <div class="flex w-full py-3 px-10">
        <div class="flex items-center justify-between w-full">
            <div class="flex items-center">
                <div
                    class="border-2 border-gray-300 w-8 h-8 rounded-full text-green-700 flex items-center justify-center">
                    <i class="fa-solid fa-wallet"></i>

                </div>
                <p class="text-gray-600 font-bold pl-2">500.00 บาท <i class="fa-solid fa-caret-right"></i></p>
            </div>
            <div class="flex items-center">
                <div
                    class="border-2 border-gray-300 w-8 h-8 rounded-full text-green-700 flex items-center justify-center">
                    <i class="fa-solid fa-chess-queen"></i>

                </div>
                <p class="text-gray-600 font-bold px-2">1,200 Points <i class="fa-solid fa-caret-right ms-2"></i></p>
            </div>
        </div>

    </div>
    <main class="w-full h-full">
        <div class="w-full flex ">
            <div class="w-1/2 flex items-center gap-2 justify-center">
                <div class="p-2 border-2 border-gray-300 rounded-full text-green-700 flex items-center justify-center">
                    <i class="fa-solid fa-wallet"></i>
                </div>
                <div class="flex items-center gap-1 font-semibold text-gray-600">
                    <p>500.00 บาท</p>
                    <i class="fa-solid fa-caret-right"></i>
                </div>

            </div>
            <div class="w-1/2 flex items-center gap-2 justify-center">
                <div class="p-2 border-2 border-gray-300 rounded-full text-green-700 flex items-center justify-center">
                    <i class="fa-solid fa-wallet"></i>
                </div>
                <div class="flex items-center gap-1 font-semibold text-gray-600">
                    <p>500.00 บาท</p>
                    <i class="fa-solid fa-caret-right"></i>
                </div>

            </div>
        </div>
    </main>



</body>

</html>
