@extends('Layout._Layout')

@section('content')
    <div class="w-full mt-10 mb-6">
        <div class="flex items-center justify-between border-b-2 py-3">

            <div class="flex items-center justify-between">
                <a href="{{ route('user.create') }}"
                    class="bg-blue-600 flex items-center hover:bg-blue-700 justify-between text-white py-2 px-3 rounded focus:ring-blue-400 focus:ring-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    &nbsp;
                    لیست صلاحیت
                </a>
            </div>
            <div>
                <h1 class="text-3xl">لیست صلاحیت های استفاده کننده</h1>
            </div>
        </div>
        <form id="user_permission_form" method="POST">
            <div class="bg-white  shadow py-8 px-4 ">
                <br><br>
                @empty($result)
                    <p class="text-center text-gray-300 font-semibold">اطلاعات یافت نشد.</p>
                @endempty

                <div class="flex items-center justify-center">
                    <div class="w-1/12">
                        <label for="permission">صلاحیت <span class="text-red-500">*</span></label>
                    </div>
                    <div class="w-6/12">
                        <select name="permission_name"
                            class="w-full rounded border border-gray-300 shadow focus:ring-2 focus:ring-offset-2-blue-600">
                            @foreach ($result as $item)
                                <option value="{{ $item->id }}">{{ $item->display_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <footer class="bg-gray-200  shadow py-6 px-4 flex items-center gap-4">
                <div>
                    <button type="submit" id="submit"
                        class="bg-blue-600 py-2 px-8 hover:bg-blue-700 text-white focus:ring-4 focus:to-blue-300 rounded-md shadow">ثبت
                        فورم</button>
                </div>
                <div>
                    <button type="reset"
                        class="bg-gray-300 hover:bg-gray-400 focus:ring-4 focus:ring-red-400 py-2 px-8 text-black rounded-md ">لغو
                        فورم</button>
                </div>
            </footer>
        </form>


    </div>
@endsection

@section('js')
@endsection
