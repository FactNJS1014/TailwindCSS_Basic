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
    <title>Factflix</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
</head>

<body class="bg-zinc-950 font-[Kanit]">

    <div class="h-screen w-screen flex bg-cover bg-center items-center justify-center"
        style="background-image: linear-gradient(rgb(0 0 0 / 60%),rgb(0 0 0 / 60%)), url('{{ asset('public/images/netflix.jpg') }}');">

        <div class="bg-zinc-950/[0.7] p-6 flex w-screen fixed z-10 top-0">
            <img src="{{ asset('public/images/Netflix-Brand.webp') }}" alt="" class="w-40 object-contain">

            <div class="absolute right-0 mr-5 space-x-3 flex">
                <i class="fa-solid fa-earth-americas text-white absolute mt-2 ml-4 text-xl"></i>
                <select class="bg-gray-500 bg-opacity-50 text-white p-2 rounded-lg">
                    <option value="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;English</option>
                    <option value="th">Thai</option>
                </select>

                <button class="text-white p-2 rounded-lg bg-red-600 hover:bg-red-700">
                    เข้าสู่ระบบ
                </button>
            </div>
        </div>

        <div class="space-y-5 text-white">
            <p class="font-bold text-7xl flex flex-col items-center justify-center gap-3">
                <span>รับชมภาพยนตร์มากมาย และ </span>
                <span>อนิเมชั่นใหม่</span>
                <span>ไม่จำกัดได้ที่ Factflix</span>
            </p>
            <p class="text-3xl flex flex-col items-center justify-center">
                ราคาเริ่มต้นที่ 299 บาท
            </p>
            <p class="text-3xl flex flex-col items-center justify-center">
                หากพร้อมรับชม ป้อนอีเมลเพื่อสร้างหรือการเป็นสมาชิกอีกครั้ง
            </p>

            <div class="flex flex-row items-center justify-center">
                <input type="text" placeholder="ที่อยู่อีเมล" class="p-4 w-3/4 text-white rounded-lg">
                <button class="p-4 font-semibold bg-red-700 text-white ms-3 rounded">เริ่มต้น</button>
            </div>
        </div>
    </div>

</body>

</html>
