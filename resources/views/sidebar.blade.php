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
    <title>Sidebar Template</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">


</head>

<body class="bg-blue-600 font-[Poppins]">
    <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="Open()">
        <i class="bi bi-filter-left px-2 bg-gray-700 rounded-md"></i>
    </span>
    <div class="flex">
        <!-- Sidebar -->
        <div
            class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] p-2 lg:w-[300px] overflow-y-auto text-center bg-gray-900 transition-all duration-300">

            <div class="text-gray-100 text-xl">
                <div class="p-2.5 mt-1 flex items-center">
                    <i class="bi bi-app-indicator px-2 py-1 bg-blue-600 rounded-md"></i>
                    <h1 class="font-bold text-gray-200 text-[15px] ml-3">Tailwindbar</h1>
                    <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Open()"></i>
                </div>
                <hr class="my-2 text-gray-600">
            </div>

            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white">
                <i class="bi bi-search text-sm"></i>
                <input type="text" class="text-[15px] ml-4 w-full bg-transparent focus:outline-none"
                    placeholder="Search">
            </div>
            <a href="{{ route('page1') }}" id="home"
                class="menu-item p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white text-[20px]">

                <i class="bi bi-house-door-fill mr-4"></i>
                Home

            </a>
            <div
                class="menu-item p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-bookmark-fill"></i>
                <span class="text-[15px] ml-4 text-gray-200">Bookmark</span>
            </div>
            <hr class="my-4 text-gray-600">
            <div class="menu-item p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                onclick="dropdown()">
                <i class="bi bi-chat-left-text-fill"></i>
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200">Chatbox</span>
                    <span class="text-sm rotate-180" id="arrow">
                        <i class="bi bi-chevron-down"></i>
                    </span>
                </div>
            </div>

            <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto text-gray-200 hidden" id="submenu">
                <h1 class="cursor-pointer p-2 hover:bg-gray-500 rounded-md mt-1">Social</h1>
                <h1 class="cursor-pointer p-2 hover:bg-gray-500 rounded-md mt-1">Personal</h1>
                <h1 class="cursor-pointer p-2 hover:bg-gray-500 rounded-md mt-1">Friends</h1>
            </div>

            <div
                class="menu-item p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-box-arrow-in-right"></i>
                <span class="text-[15px] ml-4 text-gray-200">Log out</span>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-0 lg:ml-[300px] transition-all duration-300">
            @yield('content')
        </div>
    </div>
    @stack('script')

    <script type="text/javascript">
        function dropdown() {
            document.querySelector('#submenu').classList.toggle('hidden');
            document.querySelector('#arrow').classList.toggle('rotate-0');
        }

        function Open() {
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.flex-1');

            sidebar.classList.toggle('left-[-300px]');
            if (sidebar.classList.contains('left-[-300px]')) {
                mainContent.style.marginLeft = '0';
            } else {
                mainContent.style.marginLeft = '300px';
            }
        }

        // // Add active class to the menu
        // document.querySelectorAll('.menu-item').forEach(item => {
        //     item.addEventListener('click', () => {
        //         document.querySelectorAll('.menu-item').forEach(menu => menu.classList.remove(
        //             'bg-blue-600'));
        //         item.classList.add('bg-blue-600');
        //     });
        // });
    </script>
</body>



</html>
