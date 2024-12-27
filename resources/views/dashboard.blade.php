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
    <title>Dashboard</title>
</head>

<body>

    <div class="container relative flex w-screen h-screen pt-20">
        <div class="fixed top-0 left-0 flex items-center justify-between w-full h-20 px-10 bg-black">
            <div class="flex items-center">
                <h2 class="text-xl font-bold text-white">Kob<span class="text-blue-400">Admin</span></h2>
                <h2 class="ml-16 text-3xl font-bold text-cyan-500">Analystics</h2>
            </div>
            <div class="flex items-center gap-2 mr-8 space-x-4">
                <div class="text-white">
                    <p>Hello MongDE<span class="text-blue-400">Admin</span></p>
                </div>
                <div class="text-white">
                    <i class="fa-solid fa-circle-info"></i>
                </div>
                <div class="text-white">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div class="text-white">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <div class="flex items-center">
                    <img class="object-cover w-8 h-8 rounded-full ring-2 ring-green-400"
                        src="{{ asset('public/images/Profile.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="flex flex-col h-[850px] rounded-3xl ml-10 w-60 bg-[#202528] fixed z-5">
            <div class="w-full flex items-center justify-center mt-4">
                <img src="{{ asset('public/images/decade.jpg') }}" alt=""
                    class="w-28 h-28 rounded-full object-cover">
            </div>
            <div class="flex items-center justify-center w-full mt-4">
                <p class="text-gray-400">Role: <span class="text-cyan-400">Super Admin</span></p>
            </div>
            <div class="flex items-center justify-center w-full mt-4">
                <p class="text-gray-400">Email: <span class="text-cyan-400">decade@email.com</span></p>
            </div>
            <div class="flex items-center justify-center w-full mt-4">
                <button class="hover:bg-[#181a1e] text-white p-4 w-full">Dashboard</button>
            </div>
            <div class="flex items-center justify-center w-full mt-4">
                <button class="hover:bg-[#181a1e] text-white p-4 pr-14 w-full">Users</button>
            </div>
            <div class="flex items-center justify-center w-full mt-4">
                <button class="hover:bg-[#181a1e] text-white p-4 pr-11 w-full">History</button>
            </div>
            <div class="flex items-center justify-center w-full mt-4">
                <button class="hover:bg-[#181a1e] text-white p-4 pr-7 w-full">Analystics</button>
            </div>
            <div class="flex items-center justify-center w-full mt-4">
                <button class="hover:bg-[#181a1e] text-white p-4 pr-11 w-full">Tickets</button>
            </div>
            <div class="flex items-center justify-center w-full mt-4">
                <button class="hover:bg-[#181a1e] text-white p-4 pr-10 w-full">Sale list</button>
            </div>
            <div class="flex items-center justify-center w-full mt-4">
                <button class="hover:bg-[#181a1e] text-white p-4 pr-10 w-full">Reports</button>
            </div>
            <div class="flex items-center justify-center w-full mt-4">
                <button class="hover:bg-[#181a1e] text-white p-4 pr-10 w-full">Settings</button>
            </div>
            <div class="flex items-center justify-center w-full mt-4">
                <button class="hover:bg-[#181a1e] text-white p-4 pr-12 w-full">Log out</button>
            </div>

        </div>
        <div class="flex-1 ml-80 px-6 mt-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-black mb-6">Total income <i
                        class="fa fa-dollar-sign text-orange-500 ms-2"></i>
                </h1>
                <div class="flex space-x-2 mb-5">
                    <button
                        class="text-white rounded-full px-6 py-2 bg-orange-500 hover:bg-gray-100 hover:text-orange-500 focus:outline-none focus:ring-2 focus:ring-green-200 transition duration-300 ease-in-out">
                        <i class="fa fa-chart-simple me-2"></i> Charts</button>
                    <button
                        class="text-white rounded-full px-6 py-2 bg-amber-800 hover:bg-white hover:text-amber-800 focus:outline-none focus:ring-2 focus:ring-green-200 transition duration-300 ease-in-out">
                        <i class="fa fa-paper-plane me-2 text-[18px]"></i> Sending</button>
                    <button
                        class="text-white rounded-full px-6 py-2 bg-black hover:bg-white hover:text-black focus:outline-none focus:ring-2 focus:ring-green-200 transition duration-300 ease-in-out">
                        <i class="fa fa-box me-2"></i> Stock</button>
                    <button
                        class="text-white rounded-full px-6 py-2 bg-gray-600 hover:bg-white hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-green-200 transition duration-300 ease-in-out">
                        All Order</button>
                </div>
            </div>
            <div class="flex gap-14 mb-6">
                <div class="bg-[#202528] flex p-6 rounded-2xl w-80 flex-grow border-pink-500 border-2">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-pink-500 text-lg font-semibold mb-2">Kamen rider Decade</h3>
                            <p class="text-3xl text-white font-bold">Dai Shocker</p>
                            <p class="text-pink-500 mt-2 "><i class="fa fa-arrow-up text-pink-500"></i> 85%</p>
                        </div>
                        <div>
                            <img src="{{ asset('public/images/decade-l.png') }}" alt=""
                                class="w-20 h-20 object-contain ms-9">
                        </div>
                    </div>
                </div>
                <div class="bg-[#202528] flex p-6 rounded-2xl w-80 flex-grow border-red-500 border-2">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-red-500 text-lg font-semibold mb-2">Kamen rider Kiva</h3>
                            <p class="text-3xl text-white font-bold">Fangia</p>
                            <p class="text-red-500 mt-2 "><i class="fa fa-arrow-up text-red-500"></i> 70%</p>
                        </div>
                        <div>
                            <img src="{{ asset('public/images/kiva-l.png') }}" alt=""
                                class="w-20 h-20 object-contain ms-9">
                        </div>
                    </div>
                </div>
                <div class="bg-[#202528] flex p-6 rounded-2xl w-80 flex-grow border-red-600 border-2">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-red-600 text-lg font-semibold mb-2">Kamen rider Faiz</h3>
                            <p class="text-3xl text-white font-bold">Aphenoex</p>
                            <p class="text-red-600 mt-2 "><i class="fa fa-arrow-up text-red-600"></i> 65%</p>
                        </div>
                        <div>
                            <img src="{{ asset('public/images/faiz-l.png') }}" alt=""
                                class="w-20 h-20 object-contain ms-9">
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="text-2xl font-bold text-black">Users Onlines <i
                    class="fa-solid fa-user ms-3 text-orange-500"></i></h2>

            <div class="flex gap-10 mb-6 w-full">
                <div class="flex gap-10 mb-6 w-full">

                    <div class="bg-[#202528] flex p-10 rounded-3xl justify-between items-center mt-4 w-full h-48">
                        <div class="text-center">
                            <img src="{{ asset('public/images/ooo.jpg') }}" alt=""
                                class="w-16 h-16 object-cover rounded-full mx-auto mb-2 border-2 border-green-500">

                            <h3 class="text-white text-2xl font-semibold">Kamen rider ooo</h3>
                            <p class="text-sm text-gray-400 mt-2">Now Online</p>
                        </div>
                        <div class="text-center">
                            <img src="{{ asset('public/images/faiz.jpg') }}" alt=""
                                class="w-16 h-16 object-cover rounded-full mx-auto mb-2 border-2 border-green-500">

                            <h3 class="text-white text-2xl font-semibold">Kamen rider faiz</h3>
                            <p class="text-sm text-gray-400 mt-2">Now Online</p>
                        </div>
                        <div class="text-center">
                            <img src="{{ asset('public/images/kiva.jpg') }}" alt=""
                                class="w-16 h-16 object-cover rounded-full mx-auto mb-2 border-2 border-green-500">

                            <h3 class="text-white text-2xl font-semibold">Kamen rider kiva</h3>
                            <p class="text-sm text-gray-400 mt-2">Now Online</p>
                        </div>
                        <div class="text-center">
                            <img src="{{ asset('public/images/den-o.jpg') }}" alt=""
                                class="w-16 h-16 object-cover rounded-full mx-auto mb-2 border-2 border-green-500">

                            <h3 class="text-white text-2xl font-semibold">Kamen rider den-o</h3>
                            <p class="text-sm text-gray-400 mt-2">Now Online</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="w-16 h-16 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-2">
                                <i class="fa fa-plus text-4xl text-gray-500"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="text-2xl font-bold text-black">Recent Order <i
                    class="fa-solid fa-user ms-3 text-orange-500"></i>
            </h2>

            <div class="flex gap-10 mb-6 w-full">
                <div class="flex gap-10 mb-6 w-full">

                    <div class="bg-[#202528] flex p-14 rounded-3xl mt-4 w-full flex-grow">
                        <table class="w-full">
                            <thead>
                                <tr class="text-left text-gray-400">
                                    <th class="pb-3 px-7">Course Name</th>
                                    <th class="pb-3 px-7">Price</th>
                                    <th class="pb-3">Course Number</th>
                                    <th class="pb-3 px-6">Payment</th>
                                    <th class="pb-3 px-5">Status</th>
                                    <th class="pb-3 px-4"></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-700">
                                    <td class="text-orange-500">Tailwind CSS</td>
                                    <td class="text-white">1800</td>
                                    <td class="text-white">0001</td>
                                    <td class="text-white">Banking</td>
                                    <td class="text-green-500">Success</td>
                                    <td class="text-white">Details</td>
                                </tr>
                                <tr class="border-b border-gray-700">
                                    <td class="text-orange-500">Laravel Framework</td>
                                    <td class="text-white">1500</td>
                                    <td class="text-white">0002</td>
                                    <td class="text-white">Banking</td>
                                    <td class="text-red-500">Decline</td>
                                    <td class="text-white">Details</td>
                                </tr>
                                <tr class="border-b border-gray-700">
                                    <td class="text-orange-500">Node JS</td>
                                    <td class="text-white">1500</td>
                                    <td class="text-white">0003</td>
                                    <td class="text-white">Banking</td>
                                    <td class="text-red-500">Decline</td>
                                    <td class="text-white">Details</td>
                                </tr>
                                <tr class="border-b border-gray-700">
                                    <td class="text-orange-500">PHP</td>
                                    <td class="text-white">1500</td>
                                    <td class="text-white">0004</td>
                                    <td class="text-white">Banking</td>
                                    <td class="text-red-500">Decline</td>
                                    <td class="text-white">Details</td>
                                </tr>
                                <tr class="border-b border-gray-700">
                                    <td class="text-orange-500">Flutter</td>
                                    <td class="text-white">2500</td>
                                    <td class="text-white">0005</td>
                                    <td class="text-white">Banking</td>
                                    <td class="text-red-500">Decline</td>
                                    <td class="text-white">Details</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-80 h-80 bg-[#202528] fixed top-28 rounded-3xl right-10 bottom-0">
            <div class="flex justify-center items-center mt-">
                <img src="{{ asset('public/images/decade-p.jpg') }}" alt=""
                    class="w-48 h-48 mt-6 object-contain">
            </div>
            <div class="flex flex-col items-center">
                <p class="text-2xl mt-2 text-white">Admin Dashboard</p>
                <p class="text-lg text-gray-400 mt-2">I'm Developer Full Stack</p>
            </div>
        </div>
        <div class="w-84 bg-dark-light fixed top-[440px] bottom-0 right-5">
            <div>
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-2xl text-orange-500 p-4">Reminders</h3>
                    <i class="fa fa-bell text-orange-500 bg-gray-800 p-2 rounded-full"></i>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
