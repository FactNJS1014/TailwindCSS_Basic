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
    <title>Lotto Responsive</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-200 font-[Kanit]">
    <div class="w-full bg-[#083b8f] h-16 md:h-20 ">
        <div class="max-w-5xl w-full mx-auto text-white flex items-center justify-between px-4 h-full">
            <div class="flex items-center">
                <h1 class="text-3xl font-bold">Factlotto</h1>
                <img src="{{ asset('public/images/tailwind.png') }}" alt=""
                    class="w-12 h-12 object-contain ml-4">
            </div>

            <div class="flex justify-between items-center gap-4">
                <div class="hidden lg:flex items-center gap-4 lg:text-md xl:text-lg font-semibold text-gray-300">
                    <a href="">หน้าแรก</a>
                    <a href="">ตรวจหวย</a>
                    <a href="" class="text-yellow-500">ซื้อล็อตเตอรี่</a>
                    <a href="">กระเป๋าของฉัน</a>
                    <a href="">ประวัติการซื้อ</a>
                </div>
                <div class="text-xl">
                    <img src="{{ asset('public/images/plus.png') }}" alt=""
                        class="w-12 h-12 object-contain ml-4">
                </div>
            </div>
        </div>





    </div>
    <div class="max-w-5xl w-full mx-auto px-4 md:px-0">
        <div class="px-4 md:px-6 py-3 bg-[#083b8f] my-4 md:my-8 rounded-3xl shadow-xl">
            <img src="{{ asset('public/images/tailwind-css.png') }}" alt=""
                class="w-full rounded-lg shadow-2xl h-40 md:h-60 object-cover opacity-90">
        </div>
        <div class="bg-white flex flex-col items-center gap-3 p-6 md:p-24 rounded">
            <h2 class="text-2xl md:text-3xl font-semibold text-[#083b8f]">ค้นหาเลขเด็ดตามใจคุณ!</h2>
            <div class="flex items-center justify-between w-full">
                <p class="font-semibold text-gray-500 text-sm md:text-base">งวดที่ 1 ตุลาคม 2567</p>
                <p class="text-red-500 hover:underline cursor-pointer text-sm md:text-base">ล้างข้อมูล</p>
            </div>
            <div class="w-full flex items-center justify-between px2 sm:px-6 md:px-24 lg:px-28 py-6">
                <input type="text"
                    class="w-20 md:w-16 lg:w-20 h-12 border-2 rounded-lg border-yellow-500 text-center">
                <input type="text"
                    class="w-20 md:w-16 lg:w-20  h-12 border-2 rounded-lg border-yellow-500 text-center">
                <input type="text"
                    class="w-20 md:w-16 lg:w-20  h-12 border-2 rounded-lg border-yellow-500 text-center">
                <input type="text"
                    class="w-20 md:w-16 lg:w-20  h-12 border-2 rounded-lg border-yellow-500 text-center">
                <input type="text"
                    class="w-20 md:w-16 lg:w-20  h-12 border-2 rounded-lg border-yellow-500 text-center">
                <input type="text"
                    class="w-20 md:w-16 lg:w-20  h-12 border-2 rounded-lg border-yellow-500 text-center">
            </div>
            <div class="grid gride-cols-2 md:grid-cols-3 gap-3 md:gap-6 w-full px-4">
                <button
                    class="text-center text-blue-800 bg-yellow-400 p-2 text-sm md:text-base rounded-lg">ดูทั้งหมด</button>
                <button
                    class="text-center text-blue-800 bg-gray-300 p-2 text-sm md:text-base rounded-lg">ใบเดียว</button>
                <button class="text-center text-blue-800 bg-gray-300 p-2 text-sm md:text-base rounded-lg">ชุด 2
                    ใบ</button>
                <button class="text-center text-blue-800 bg-gray-300 p-2 text-sm md:text-base rounded-lg">ชุด 3
                    ใบ</button>
                <button class="text-center text-blue-800 bg-gray-300 p-2 text-sm md:text-base rounded-lg">ชุด 4
                    ใบ</button>
                <button class="text-center text-blue-800 bg-gray-300 p-2 text-sm md:text-base rounded-lg">ชุด 5
                    ใบ</button>
                <button
                    class="text-center text-blue-800 bg-gray-300 p-2 rounded-lg col-span-3 md:col-span-1">เลขเซียนดัง</button>
                <button
                    class="text-center text-blue-800 bg-gray-300 p-2 rounded-lg col-span-3 md:col-span-1 py-2">เลขเด็ดเซียนกบ</button>
                <button
                    class="text-center text-white font-bold bg-blue-800 p-2 rounded-lg col-span-3  py-2 text-sm md:text-base">
                    <i class="fa fa-magnifying-glass mr-2 text-yellow-500"></i> ค้นหาเลขเด็ด</button>
            </div>

        </div>
        <div class="py-6">
            <h1 class="text-xl font-semibold text-gray-600">ผลการค้นหา</h1>
            <div class="grid grid-cols-3 gap-5 w-full py-4">
                <div class="bg-[#083b8f] rounded-lg overflow-hidden relative">
                    <img src="{{ asset('public/images/lottery.jpg') }}" alt="">
                    <p class="text-center text-white text-sm p-1"><i class="fa fa-cart-shopping mr-2 text-yellow-500"
                            aria-hidden="true"></i>
                        เพิ่มลงตะกร้า</p>
                    <div
                        class="absolute bg-gradient-to-b from-blue-500 to-[#083b8f] top-0 right-0 bottom-7 flex items-center">
                        <p class="rotate-90 text-white">80 บาท</p>
                    </div>
                </div>
                <div class="bg-[#083b8f] rounded-lg overflow-hidden relative">
                    <img src="{{ asset('public/images/lottery.jpg') }}" alt="">
                    <p class="text-center text-white text-sm p-1"><i class="fa fa-cart-shopping mr-2 text-yellow-500"
                            aria-hidden="true"></i>
                        เพิ่มลงตะกร้า</p>
                    <div
                        class="absolute bg-gradient-to-b from-blue-500 to-[#083b8f] top-0 right-0 bottom-7 flex items-center">
                        <p class="rotate-90 text-white text-xs md:text-sm">80 บาท</p>
                    </div>
                </div>
                <div class="bg-[#083b8f] rounded-lg overflow-hidden relative">
                    <img src="{{ asset('public/images/lottery.jpg') }}" alt="">
                    <p class="text-center text-white text-sm p-1"><i class="fa fa-cart-shopping mr-2 text-yellow-500"
                            aria-hidden="true"></i>
                        เพิ่มลงตะกร้า</p>
                    <div
                        class="absolute bg-gradient-to-b from-blue-500 to-[#083b8f] top-0 right-0 bottom-7 flex items-center">
                        <p class="rotate-90 text-white text-xs md:text-sm">80 บาท</p>
                    </div>
                </div>
                <div class="bg-[#083b8f] rounded-lg overflow-hidden relative">
                    <img src="{{ asset('public/images/lottery.jpg') }}" alt="">
                    <p class="text-center text-white text-sm p-1"><i class="fa fa-cart-shopping mr-2 text-yellow-500"
                            aria-hidden="true"></i>
                        เพิ่มลงตะกร้า</p>
                    <div
                        class="absolute bg-gradient-to-b from-blue-500 to-[#083b8f] top-0 right-0 bottom-7 flex items-center">
                        <p class="rotate-90 text-white text-xs md:text-sm">80 บาท</p>
                    </div>
                </div>
                <div class="bg-[#083b8f] rounded-lg overflow-hidden relative">
                    <img src="{{ asset('public/images/lottery.jpg') }}" alt="">
                    <p class="text-center text-white text-sm p-1"><i class="fa fa-cart-shopping mr-2 text-yellow-500"
                            aria-hidden="true"></i>
                        เพิ่มลงตะกร้า</p>
                    <div
                        class="absolute bg-gradient-to-b from-blue-500 to-[#083b8f] top-0 right-0 bottom-7 flex items-center">
                        <p class="rotate-90 text-white text-xs md:text-sm">80 บาท</p>
                    </div>
                </div>
                <div class="bg-[#083b8f] rounded-lg overflow-hidden relative">
                    <img src="{{ asset('public/images/lottery.jpg') }}" alt="">
                    <p class="text-center text-white text-sm p-1"><i class="fa fa-cart-shopping mr-2 text-yellow-500"
                            aria-hidden="true"></i>
                        เพิ่มลงตะกร้า</p>
                    <div
                        class="absolute bg-gradient-to-b from-blue-500 to-[#083b8f] top-0 right-0 bottom-7 flex items-center">
                        <p class="rotate-90 text-white text-xs md:text-sm">80 บาท</p>
                    </div>
                </div>
                <div class="bg-[#083b8f] rounded-lg overflow-hidden relative">
                    <img src="{{ asset('public/images/lottery.jpg') }}" alt="">
                    <p class="text-center text-white text-sm p-1"><i class="fa fa-cart-shopping mr-2 text-yellow-500"
                            aria-hidden="true"></i>
                        เพิ่มลงตะกร้า</p>
                    <div
                        class="absolute bg-gradient-to-b from-blue-500 to-[#083b8f] top-0 right-0 bottom-7 flex items-center">
                        <p class="rotate-90 text-white text-xs md:text-sm">80 บาท</p>
                    </div>
                </div>
                <div class="bg-[#083b8f] rounded-lg overflow-hidden relative">
                    <img src="{{ asset('public/images/lottery.jpg') }}" alt="">
                    <p class="text-center text-white text-sm p-1"><i class="fa fa-cart-shopping mr-2 text-yellow-500"
                            aria-hidden="true"></i>
                        เพิ่มลงตะกร้า</p>
                    <div
                        class="absolute bg-gradient-to-b from-blue-500 to-[#083b8f] top-0 right-0 bottom-7 flex items-center">
                        <p class="rotate-90 text-white text-xs md:text-sm">80 บาท</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="flex lg:hidden items-center justify-around bg-[#083b8f] p-4 text-white bottom-0 insert-x-0">
        <div class="flex flex-col items-center gap-1">
            <i class="fa fa-house-chimney text-md md:text-xl"></i>
            <a href="">หน้าแรก</a>
        </div>
        <div class="flex flex-col items-center gap-1">
            <i class="fa fa-magnifying-glass text-md md:text-xl"></i>
            <a href="">ตรวจหวย</a>
        </div>
        <div class="flex flex-col items-center gap-1">
            <i class="fa fa-cart-shopping text-md md:text-xl"></i>
            <a href="" class="text-yellow-500">ซื้อล็อตเตอรี่</a>
        </div>
        <div class="flex flex-col items-center gap-1">
            <i class="fa fa-wallet text-md md:text-xl"></i>
            <a href="">กระเป๋าของฉัน</a>
        </div>
        <div class="flex flex-col items-center gap-1">
            <i class="fa fa-layer-group text-md md:text-xl"></i>
            <a href="">ประวัติการซื้อ</a>
        </div>


    </div>


</body>

</html>
