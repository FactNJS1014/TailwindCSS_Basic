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
    <title>Navbar Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
</head>

<body class="font-[Poppins] bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee] h-full">
    <header class="bg-white p-6">
        <nav class="flex justify-between items-center w-[92%]  mx-auto">
            {{-- <div>
                <img class="w-[100px]" src="{{ asset('public/images/Logo/stripe.png') }}" alt="">
            </div> --}}

            <div class="uppercase">
                <ul class="flex items-center gap-[4vw] text-[18px] font-medium ">
                    <li class="hover:text-white">
                        <a href="#" class=" hover:bg-pink-700 p-3 hover:rounded-full">บันทึกข้อมูล</a>
                    </li>
                    <li>
                        <a href="#"
                            class="hover:text-white hover:bg-pink-700 p-3  hover:rounded-full">ตรวจสอบข้อมูล</a>
                    </li>
                    <li>
                        <a href="#"
                            class="hover:text-white hover:bg-pink-700 p-3  hover:rounded-full">แสดงข้อมูลที่บันทึก</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white hover:bg-pink-700 p-3  hover:rounded-full">รายงาน
                            (Report)</a>
                    </li>
                    <li>
                        <a href="#"
                            class="hover:text-white hover:bg-pink-700 p-3 hover:rounded-full">สายอนุมัติ</a>
                    </li>
                </ul>
            </div>
            <p class="text-[20px] text-blue-700 font-semibold">Natdanai Jansomboon</p>
        </nav>

    </header>
    <main>
        <div class="w-[90%] flex justify-center items-center mx-auto p-6 py-5">

            <p class="text-[30px]  text-black font-semibold uppercase bg-white p-3 rounded-full"><span
                    class="p-3 text-red-500" style="font-size: 35px;">&#9997</span>Hello,
                Website Development to Coding Programming
            </p>

        </div>
        <div class="flex bg-white p-6 mx-auto w-[90%] gap-5 justify-center items-center rounded-md">
            <img src="{{ asset('public/images/PicturesGN/python.png') }}" alt="" class="w-20">
            <img src="{{ asset('public/images/PicturesGN/html.png') }}" alt="" class="w-20">
            <img src="{{ asset('public/images/PicturesGN/css3.svg') }}" alt="" class="w-[90px]">
            <img src="{{ asset('public/images/PicturesGN/javascript.png') }}" alt="" class="w-[80px]">

        </div>

        <div
            class="p-6 bg-gradient-to-r from-blue-500 via-blue-300 to-cyan-300 border-4 border-yellow-500 flex justify-center items-center mt-5 mx-auto w-[90%] rounded-xl">
            <p class="text-[35px] font-bold uppercase text-cyan-900">By Mr.Factory</p>


        </div>
        <div class="flex-1 justify-center items-center gap-3">
            <div class="grid grid-cols-3">
                <div class="flex flex-col">
                    <div class="p-6 mx-auto bg-white">
                        <img class="w-1/3" src="{{ asset('public/images/PicturesGN/codehtml.png') }}" alt="">


                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
