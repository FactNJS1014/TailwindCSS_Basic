@extends('sidebar')
@section('content')
    <div class="flex justify-center mt-4 gap-6">
        <p class="text-[24pt] mt-2 bg-white text-orange-500 p-2 px-4 rounded-lg">แบบฟอร์ม Demo</p>
    </div>

    <div class="flex-1 mt-10">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mr-2 bg-gray-500 p-4 rounded-lg ms-2">
            <div class="flex flex-col">
                <label for="" class="text-[22px] text-white ml-3">Employee ID:</label>

                <input type="text"
                    class="bg-white text-[20px] text-blue-600 text-md focus:placeholder:text-blue-600 focus:outline-none px-4 py-2 ml-3 rounded-full mt-2"
                    placeholder="Input 1">
            </div>

            <div class="flex flex-col">
                <label for="" class="text-[22px] text-white ml-3">Data 1:</label>

                <input type="text"
                    class="bg-white text-[20px] text-blue-600 text-md focus:placeholder:text-blue-600 focus:outline-none px-4 py-2 ml-3 rounded-full mt-2"
                    placeholder="Input 2">
            </div>



        </div>
    </div>
@endsection
@push('script')
    <script>
        document.getElementById('home').classList.add('bg-blue-600');
    </script>
@endpush
