@extends('sidebar')
@section('content')
    <div class="flex justify-center mt-4 gap-6">
        <p class="text-[24pt] mt-2 bg-white text-orange-500 p-2 px-4 rounded-lg">แบบฟอร์ม Demo</p>
    </div>

    <div class="flex-1 mt-10">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mr-2">
            <div class="flex flex-col">
                <label for="" class="text-[20px] text-white ml-3">Input 1</label>
                <input type="text"
                    class="bg-white text-[20px] text-blue-600 text-md focus:placeholder:text-blue-600 focus:outline-none px-4 py-2 ml-3 rounded-md mt-2"
                    placeholder="Input 1">
            </div>

            <div class="flex flex-col">
                <label for="" class="text-[20px] text-white ml-3">Input 1</label>
                <input type="text"
                    class="bg-white text-[20px] text-blue-600 text-md focus:placeholder:text-blue-600 focus:outline-none px-4 py-2 ml-3 rounded-md mt-2"
                    placeholder="Input 1">
            </div>


            <div class="flex flex-col">
                <label for="" class="text-[20px] text-white ml-3">Input 1</label>
                <input type="text"
                    class="bg-white text-[20px] text-blue-600 text-md focus:placeholder:text-blue-600 focus:outline-none px-4 py-2 ml-3 rounded-md mt-2"
                    placeholder="Input 1">
            </div>

            <div class="flex flex-col">
                <label for="" class="text-[20px] text-white ml-3">Input 1</label>
                <input type="text"
                    class="bg-white text-[20px] text-blue-600 text-md focus:placeholder:text-blue-600 focus:outline-none px-4 py-2 ml-3 rounded-md mt-2"
                    placeholder="Input 1">
            </div>

            <div class="flex flex-col bg-white p-2 ms-2 rounded-md">
                <label for="" class="text-[20px] text-blue-700 ml-3 font-semibold">Input 1</label>
                <input type="text"
                    class="bg-white text-[20px] text-blue-600 text-md focus:placeholder:text-blue-600 focus:outline-none px-4 py-2 rounded-md mt-2 border-2 border-blue-300"
                    placeholder="Input 1">
            </div>

            <div class="flex flex-col bg-white p-2 ms-2 rounded-md">
                <label for="" class="text-[20px] text-blue-700 ml-3 font-semibold">Input 1</label>
                <input type="text"
                    class="bg-white text-[20px] text-blue-600 text-md focus:placeholder:text-blue-600 focus:outline-none px-4 py-2 rounded-md mt-2 border-2 border-blue-300"
                    placeholder="Input 1">
            </div>

            <div class="flex flex-col bg-white p-2 ms-2 rounded-md">
                <label for="" class="text-[20px] text-blue-700 ml-3 font-semibold">Input 1</label>
                <input type="text"
                    class="bg-white text-[20px] text-blue-600 text-md focus:placeholder:text-blue-600 focus:outline-none px-4 py-2 rounded-md mt-2 border-2 border-blue-300"
                    placeholder="Input 1">
            </div>
            <div class="flex flex-col bg-white p-2 ms-2 rounded-md">
                <label for="" class="text-[20px] text-blue-700 ml-3 font-semibold">Input 1</label>
                <input type="text"
                    class="bg-white text-[20px] text-blue-600 text-md focus:placeholder:text-blue-600 focus:outline-none px-4 py-2 rounded-md mt-2 border-2 border-blue-300"
                    placeholder="Input 1">
            </div>

            <div class="flex flex-col bg-white p-2 ms-2 rounded-md mb-2">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('public/images/kiva.jpg') }}" alt="" class="w-49 h-49 rounded-md">
                </div>
                <label for="" class="text-[20px] text-blue-700 ml-3 font-semibold">Input 1</label>
                <input type="text"
                    class="bg-white text-[20px] text-blue-600 text-md focus:placeholder:text-blue-600 focus:outline-none px-4 py-2 rounded-md mt-2 border-2 border-blue-300"
                    placeholder="Input 1">
            </div>

            <div class="flex flex-col bg-white p-2 ms-2 rounded-md mb-2">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('public/images/den-o.jpg') }}" alt="" class="w-49 h-49 rounded-md">
                </div>
                <label for="" class="text-[20px] text-blue-700 ml-3 font-semibold">Input 1</label>
                <input type="text"
                    class="bg-white text-[20px] text-blue-600 text-md focus:placeholder:text-blue-600 focus:outline-none px-4 py-2 rounded-md mt-2 border-2 border-blue-300"
                    placeholder="Input 1">
            </div>
            <div class="flex flex-col bg-white p-2 ms-2 rounded-md mb-2">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('public/images/kiva-l.png') }}" alt="" class="w-49 h-49 rounded-md">
                </div>
                <label for="" class="text-[20px] text-blue-700 ml-3 font-semibold">Input 1</label>
                <input type="text"
                    class="bg-white text-[20px] text-blue-600 text-md focus:placeholder:text-blue-600 focus:outline-none px-4 py-2 rounded-md mt-2 border-2 border-blue-300"
                    placeholder="Input 1">
            </div>
            <div class="flex flex-col bg-white p-2 ms-2 rounded-md mb-2">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('public/images/decade-l.png') }}" alt="" class="w-49 h-49 rounded-md">
                </div>
                <label for="" class="text-[20px] text-blue-700 ml-3 font-semibold">Input 1</label>
                <input type="text"
                    class="bg-white text-[20px] text-blue-600 text-md focus:placeholder:text-blue-600 focus:outline-none px-4 py-2 rounded-md mt-2 border-2 border-blue-300"
                    placeholder="Input 1">
            </div>




        </div>
    </div>
@endsection
@push('script')
    <script>
        document.getElementById('home').classList.add('bg-blue-600');
    </script>
@endpush
