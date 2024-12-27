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
    <title>FoodPos</title>
</head>

<body>
    <div class="container relative flex w-screen h-screen">

        <div
            class="flex flex-col h-screen bg-black rounded-r-3xl w-60 hover:bg-slate-800 from-slate-800 to-slate-700 transition-colors duration-700 delay-300">
            <div class="flex items-center justify-center w-full h-20">
                <p class="text-2xl text-white">Control z Food Pos</p </div>
            </div>
            <div class="flex items-center justify-center w-full h-20">
                <img class="object-fill rounded-full w-28 h-28"
                    src="{{ asset('public/images/Kamen rider/Profile.png') }}" alt="">
            </div>
            <div class="flex items-center justify-center mt-10 text-xl">
                <p class="text-white">Hello Factory</p>
            </div>

            <span class="flex items-center justify-center text-blue-500">อีก 2 ชั่วโมงได้เวลามื้อเที่ยง</span>

            <section>
                <div class="flex flex-col items-center justify-center mt-8 text-white">
                    <button
                        class="flex items-center justify-center w-48 transition duration-300 rounded-lg hover:bg-white hover:text-black py-2"><i
                            class="fa-solid fa-house mr-2"></i>Dashboard</button>
                    <button
                        class="flex items-center justify-center w-48 transition duration-300 py-2 mr-7 mt-4 rounded-lg hover:bg-white hover:text-black"><i
                            class="fa-solid fa-mug-hot mr-2"></i>Orders</button>
                    <button
                        class="flex items-center justify-center w-48 transition duration-300 py-2 mt-4 rounded-lg hover:bg-white hover:text-black mr-9"><i
                            class="fa-solid fa-layer-group mr-2"></i>Detail</button>
                    <button
                        class="flex items-center justify-center w-48 transition duration-300 rounded-lg hover:bg-white hover:text-black py-2 mr-7 mt-4"><i
                            class="fa-brands fa-paypal mr-2"></i>Finace</button>
                    <button
                        class="flex items-center justify-center w-48 transition duration-300 rounded-lg hover:bg-white hover:text-black mr-6 py-2 mt-4"><i
                            class="fa-solid fa-right-to-bracket mr-2"></i>Log out</button>

                    <div class="flex items-center justify-center mt-39">
                        <button
                            class="w-48 rounded-full bg-orange-500 py-3 hover:bg-white hover:text-black transition duration-300">Start
                            new
                            folder</button>
                    </div>
                </div>
            </section>
        </div>
        <div class="w-full h-20 fixed flex items-center justify-between  top-0 left-0 px-10">
            <div class="ml-60">
                {{-- 1 --}}
                <div class="flex items-center justify-between space-x-4">
                    <div class="bg-gray-100 flex items-center justify-center rounded-full w-full">
                        <input type="text" class="text-black bg-gray-100 rounded-l-full px-4 focus:outline-none"
                            placeholder="Search For Dinner" id="search-dinner">
                        <div class="p-2">
                            <button class="flex items-center justify-center bg-red-500 rounded-full p-2 h-8 w-9">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>

                    </div>
                    <div class="bg-gray-100 flex items-center justify-center rounded-full w-full">
                        <input type="text" class="text-black bg-gray-100 rounded-l-full px-4 focus:outline-none"
                            placeholder="Search Restaurant" id="search-dinner">
                        <div class="p-2">
                            <button class="flex items-center justify-center bg-green-500 rounded-full p-2 h-8 w-9">
                                <i class="fa-solid fa-home text-white"></i>
                            </button>
                        </div>

                    </div>
                </div>


            </div>

            <div class="flex items-center mr-8 space-x-4 gap-2">
                <div class="text-orange-500">
                    <p>Hello Factory Dev</p>
                </div>
                <div class="text-black">
                    <i class="fa-solid fa-circle-info"></i>
                </div>
                <div class="text-black">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div class="text-black">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <div class="flex items-center">
                    <img class="object-fill rounded-full w-8 h-8 ring-2 ring-green-400"
                        src="{{ asset('public/images/Profile.png') }}" alt="">
                </div>

            </div>
        </div>

        <div class="flex-1 ml-10 px-6 mt-20">
            <div class="flex justify-between items-center">
                <p class="text-3xl font-bold text-black">What would you eat to day?<i
                        class="fa-solid fa-utensils ms-2"></i>
                </p>
                <div class="flex space-x-2">
                    <button
                        class="text-white bg-orange-500 rounded-full px-6 py-2 hover:bg-gray-100 hover:text-orange-500 transition duration-300"><i
                            class="fa-solid fa-cookie-bite me-2"></i>
                        Snack
                    </button>
                    <button
                        class="text-white bg-amber-800 rounded-full px-6 py-2 hover:bg-gray-100 hover:text-amber-800 transition duration-300"><i
                            class="fa-solid fa-mug-hot me-2"></i>
                        Drinks
                    </button>
                    <button
                        class="text-white bg-black rounded-full px-6 py-2 hover:bg-white hover:text-black transition duration-300"><i
                            class="fa-solid fa-utensils me-2"></i>
                        Foods
                    </button>
                    <button
                        class="text-white bg-gray-600 rounded-full px-6 py-2 hover:bg-gray-100 hover:text-gray-600 transition duration-300"><i>
                            All Menu </button>

                </div>
            </div>

            <div class="grid grid-cols-6 mt-5 gap-10">
                <div class="flex flex-col bg-zinc-800 rounded-lg overflow-hidden w-44 h-56">
                    <img src="{{ asset('public/images/PicturesGN/pizza.jpg') }}" alt=""
                        class="w-full h-32 object-cover">
                    <div class="flex items-center justify-content justify-between p-4">
                        <div>
                            <h3 class="text-white">Pizza & Pasta</h3>
                            <p class="mt-2 text-sm text-gray-400">5 Items</p>
                        </div>
                        <div>
                            <i
                                class="fa-solid fa-circle-plus text-orange-400 hover:text-white cursor-pointer text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col bg-zinc-800 rounded-lg overflow-hidden w-44 h-56">
                    <img src="{{ asset('public/images/PicturesGN/pizza.jpg') }}" alt=""
                        class="w-full h-32 object-cover">
                    <div class="flex items-center justify-content justify-between p-4">
                        <div>
                            <h3 class="text-white">Pizza & Pasta</h3>
                            <p class="mt-2 text-sm text-gray-400">5 Items</p>
                        </div>
                        <div>
                            <i
                                class="fa-solid fa-circle-plus text-orange-400 hover:text-white cursor-pointer text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col bg-zinc-800 rounded-lg overflow-hidden w-44 h-56">
                    <img src="{{ asset('public/images/PicturesGN/pizza.jpg') }}" alt=""
                        class="w-full h-32 object-cover">
                    <div class="flex items-center justify-content justify-between p-4">
                        <div>
                            <h3 class="text-white">Pizza & Pasta</h3>
                            <p class="mt-2 text-sm text-gray-400">5 Items</p>
                        </div>
                        <div>
                            <i
                                class="fa-solid fa-circle-plus text-orange-400 hover:text-white cursor-pointer text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col bg-zinc-800 rounded-lg overflow-hidden w-44 h-56">
                    <img src="{{ asset('public/images/PicturesGN/pizza.jpg') }}" alt=""
                        class="w-full h-32 object-cover">
                    <div class="flex items-center justify-content justify-between p-4">
                        <div>
                            <h3 class="text-white">Pizza & Pasta</h3>
                            <p class="mt-2 text-sm text-gray-400">5 Items</p>
                        </div>
                        <div>
                            <i
                                class="fa-solid fa-circle-plus text-orange-400 hover:text-white cursor-pointer text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col bg-zinc-800 rounded-lg overflow-hidden w-44 h-56">
                    <img src="{{ asset('public/images/PicturesGN/pizza.jpg') }}" alt=""
                        class="w-full h-32 object-cover">
                    <div class="flex items-center justify-content justify-between p-4">
                        <div>
                            <h3 class="text-white">Pizza & Pasta</h3>
                            <p class="mt-2 text-sm text-gray-400">5 Items</p>
                        </div>
                        <div>
                            <i
                                class="fa-solid fa-circle-plus text-orange-400 hover:text-white cursor-pointer text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col bg-zinc-800 rounded-lg overflow-hidden w-44 h-56">
                    <img src="{{ asset('public/images/PicturesGN/pizza.jpg') }}" alt=""
                        class="w-full h-32 object-cover">
                    <div class="flex items-center justify-content justify-between p-4">
                        <div>
                            <h3 class="text-white">Pizza & Pasta</h3>
                            <p class="mt-2 text-sm text-gray-400">5 Items</p>
                        </div>
                        <div>
                            <i
                                class="fa-solid fa-circle-plus text-orange-400 hover:text-white cursor-pointer text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="text-black font-bold text-3xl mt-4">Top meals this week
                <i class="fa-solid fa-star text-yellow-400"></i>
                <i class="fa-solid fa-star text-yellow-400"></i>
                <i class="fa-solid fa-star text-yellow-400"></i>
                <i class="fa-solid fa-star text-yellow-400"></i>
                <i class="fa-solid fa-star text-yellow-400"></i>
            </h1>
            <h3 class="text-black font-bold text-md">Recommended !</h3>

            <div class="grid grid-cols-6 mt-5 gap-10">
                <div class="bg-zinc-800 rounded-lg h-56 shadow hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ asset('public/images/PicturesGN/pizza.jpg') }}" alt=""
                        class="w-full h-32 object-cover">
                    <div class="flex items-center justify-content justify-between">
                        <div>
                            <h3 class="text-white ms-2">Snack 4 Start</h3>
                            <span class="text-sm font-bold text-gray-400 ml-2">Hot</span>
                            <div class="flex items-center ms-2 mt-3 gap-1">
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                            </div>
                        </div>
                        <div class="mr-5">
                            <i
                                class="fa-solid fa-circle-plus text-orange-400 hover:text-white cursor-pointer text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-zinc-800 rounded-lg h-56 shadow hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ asset('public/images/PicturesGN/pizza.jpg') }}" alt=""
                        class="w-full h-32 object-cover">
                    <div class="flex items-center justify-content justify-between">
                        <div>
                            <h3 class="text-white ms-2">Snack 4 Start</h3>
                            <span class="text-sm font-bold text-gray-400 ml-2">Hot</span>
                            <div class="flex items-center ms-2 mt-3 gap-1">
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                            </div>
                        </div>
                        <div class="mr-5">
                            <i
                                class="fa-solid fa-circle-plus text-orange-400 hover:text-white cursor-pointer text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-zinc-800 rounded-lg h-56 shadow hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ asset('public/images/PicturesGN/pizza.jpg') }}" alt=""
                        class="w-full h-32 object-cover">
                    <div class="flex items-center justify-content justify-between">
                        <div>
                            <h3 class="text-white ms-2">Snack 4 Start</h3>
                            <span class="text-sm font-bold text-gray-400 ml-2">Hot</span>
                            <div class="flex items-center ms-2 mt-3 gap-1">
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                            </div>
                        </div>
                        <div class="mr-5">
                            <i
                                class="fa-solid fa-circle-plus text-orange-400 hover:text-white cursor-pointer text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-zinc-800 rounded-lg h-56 shadow hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ asset('public/images/PicturesGN/pizza.jpg') }}" alt=""
                        class="w-full h-32 object-cover">
                    <div class="flex items-center justify-content justify-between">
                        <div>
                            <h3 class="text-white ms-2">Snack 4 Start</h3>
                            <span class="text-sm font-bold text-gray-400 ml-2">Hot</span>
                            <div class="flex items-center ms-2 mt-3 gap-1">
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                            </div>
                        </div>
                        <div class="mr-5">
                            <i
                                class="fa-solid fa-circle-plus text-orange-400 hover:text-white cursor-pointer text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-zinc-800 rounded-lg h-56 shadow hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ asset('public/images/PicturesGN/pizza.jpg') }}" alt=""
                        class="w-full h-32 object-cover">
                    <div class="flex items-center justify-content justify-between">
                        <div>
                            <h3 class="text-white ms-2">Snack 4 Start</h3>
                            <span class="text-sm font-bold text-gray-400 ml-2">Hot</span>
                            <div class="flex items-center ms-2 mt-3 gap-1">
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                            </div>
                        </div>
                        <div class="mr-5">
                            <i
                                class="fa-solid fa-circle-plus text-orange-400 hover:text-white cursor-pointer text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-zinc-800 rounded-lg h-56 shadow hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ asset('public/images/PicturesGN/pizza.jpg') }}" alt=""
                        class="w-full h-32 object-cover">
                    <div class="flex items-center justify-content justify-between">
                        <div>
                            <h3 class="text-white ms-2">Snack 4 Start</h3>
                            <span class="text-sm font-bold text-gray-400 ml-2">Hot</span>
                            <div class="flex items-center ms-2 mt-3 gap-1">
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                            </div>
                        </div>
                        <div class="mr-5">
                            <i
                                class="fa-solid fa-circle-plus text-orange-400 hover:text-white cursor-pointer text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="text-3xl font-bold text-black mb-4 mt-4">Your favorite restaurants
                <i class="fa fa-plane ms-2"></i>
            </h2>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex bg-black rounded-lg p-2">
                    <img class="w-1/3 h-32 object-cover rounded mr-4"
                        src="{{ asset('public/images/PicturesGN/restaurant1.jpg') }}" alt="">

                    <div class="flex items-center justify-between">
                        <div class="text-white">
                            <h3 class="font-semibold">Delicious Fried Chicken</h3>
                            <p class="text-sm mt-1">2500 August Lane, CA 90005</p>
                            <p class="text-sm mt-1">7144-1265411 Thailand</p>
                            <p class="text-sm mt-4">Total Like</p>
                        </div>
                        <div class="ml-14">
                            <i class="fa-solid fa-map-location-dot text-4xl text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="flex bg-black rounded-lg p-2">
                    <img class="w-1/3 h-32 object-cover rounded mr-4"
                        src="{{ asset('public/images/PicturesGN/restaurant1.jpg') }}" alt="">

                    <div class="flex items-center justify-between">
                        <div class="text-white">
                            <h3 class="font-semibold">Delicious Fried Chicken</h3>
                            <p class="text-sm mt-1">2500 August Lane, CA 90005</p>
                            <p class="text-sm mt-1">7144-1265411 Thailand</p>
                            <p class="text-sm mt-4">Total Like</p>
                        </div>
                        <div class="ml-14">
                            <i class="fa-solid fa-map-location-dot text-4xl text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-zinc-700 p-7 fixed right-0 top-20 bottom-0 overflow-y-auto rounded-lg mr-6 w-1/6 mb-4">
            <div class="flex items-center justify-between">
                <div class="text-white">
                    <h2 class="text-xl font-bold">Order Summary</h2>
                </div>
                <div>
                    <p class="text-orange-400 bg-gray-600 p-2 rounded-lg">Edit</p>
                </div>

            </div>
            <div class="mt-4 space-y-2">
                <p class="text-sm text-gray-400"><i
                        class="fa fa-clock me-2 bg-white p-1 px-2 rounded text-[12px] text-orange-500"></i>09:40 AM
                </p>
                <p class="text-sm text-gray-400"><i
                        class="fa fa-location-dot me-2 bg-white p-1 px-2 rounded text-[14px] text-orange-500 mt-3"></i>
                    2817 Pacific Ave Venice, CA 90291
                </p>
                <p class="text-sm text-gray-400"><i
                        class="fa fa-comment me-2 bg-white p-1 text-[15px] rounded text-orange-500 mt-3"></i>
                    Orders
                    must stay
                    warm</p>
            </div>
            <span class="flex items-center justify-between mt-4 text-white">List Orders Detail</span>
            <div class="mt-6">
                <div class="flex items-center justify-between bg-white rounded-lg p-2 w-full">
                    <img class="w-12 h-12 object rounded mr-4"
                        src="{{ asset('public/images/PicturesGN/drinks1.jpg') }}" alt="">

                    <div>
                        <p class="text-black font-semibold">Soda Juice</p>
                        <p class="text-gray-400">3 glasses</p>
                    </div>
                    <div class="flex items-center">
                        <button class="text-green-500 rounded-full px-2 py-1">-</button>
                        <input type="text" value="1" class="w-12 text-center form-input bg-white">
                        <button class="text-green-500 rounded-full px-2 py-1">+</button>
                    </div>
                    <p class="text-sm text-black">$10.00</p>
                </div>
            </div>
            <span class="flex items-center justify-between mt-4 text-white">Payment</span>
            <div class="bg-gradient-to-r from-orange-400 via-orange-600 to-orange-800 p-4 rounded-lg mt-4">
                <div class="flex justify-between items-center mb-2">
                    <i class="fab fa-cc-visa text-2xl text-white"></i>
                    <p class="font-semibold text-white">**** **** </p>
                    <p class="font-semibold text-white">Expire </p>
                    <p class="font-semibold text-white">CVV </p>
                </div>
                <div class="flex justify-between text-sm p-2">
                    <p class="text-gray-100">Balance </p>
                    <p class="text-white ms-20">17/07 </p>
                    <p class="text-white">186 </p>
                </div>
                <div class="flex justify-between text-sm mr-2 mt-2 ml-2 text-white">
                    <p class="text-gray-300">Available funds </p>
                    <p class="text-gray-300 bg-black px-2 rounded">$200.00 </p>
                </div>

            </div>
            <button class="w-full bg-orange-500 text-white py-2 px-4 rounded-full hover:bg-orange-600 mt-28">Check
                out</button>
        </div>


    </div>


</body>

</html>
