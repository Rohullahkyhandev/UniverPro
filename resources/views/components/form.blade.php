@extends('Layout._Layout')

{{-- core form componnent that will use entire will system   --}}
@section('content')
    <div class="mt-10 m-10">
        <div class="flex items-start justify-between">
            <div>
                <a href=""
                    class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-md flex items-center justify-center gap-3 focus:ring-1 focus:bg-indigo-500">Some
                    Text</a>
            </div>
            <div>
                <p class="text-xl font-semibold text-gray-600">Some text will come here</p>
            </div>
        </div>
        <form action="">
            <div class="bg-white shadow py-20 px-10 w-full mt-4">
                <div class="w-full  text-center">
                    <div class="flex items-center justify-center w-full">
                        <div class="w-3/12">
                            <label for="name">Name <span class="text-red-500">*</span></label>
                        </div>
                        <div class="w-12/12">
                            <input type="text"
                                class="rounded border  border-gray-300 shadow focus:ring-2  focus:outline-none focus:ring-indigo-500">
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-gray-200 py-5  flex items-start justify-start gap-10 px-10">
                <button
                    class="bg-blue-500 py-2 px-4 hover:bg-blue-700 text-white rounded-md shadow focus:ring-2 focus:ring-indigo-500">ثبت
                    فورم</button>
                <a href=""
                    class="bg-gray-400 py-2 px-4 hover:bg-gray-600 text-white rounded-md shadow focus:ring-2 focus:ring-red-500">لغو
                    فورم</a>
            </footer>
        </form>
    </div>
@endsection
{{-- end of core form --}}
