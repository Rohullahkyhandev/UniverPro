@extends('Layout._Layout')


@section('content')
    <div class="w-full mt-4 mb-6">
        <div class="bg-white  shadow py-4 px-4">
            <div id="success_msg">
                @include('flashMessages.success_message')
            </div>
            <div class="flex items-center justify-between border-b-2 py-3">

                <div class="flex items-center justify-between ">
                    <a href="#"
                        class="bg-blue-600 flex items-center justify-between text-white py-3 px-2 rounded focus:ring-blue-400 focus:ring-4">ثبت
                        مکتوب جدید
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>

                    </a>

                </div>
                <div>
                    <h1 class="text-3xl">لیست مکتوب ها</h1>
                </div>

            </div>
            <div>
                <br><br>
                <form id="form" method="POST">
                    @csrf
                    <div>
                        <div>
                            <label for="name">Numbe of Document <span class="text-red-500">*</span></label>
                        </div>
                        <div>
                            <input type="text" name="document_sn"
                                class="border w-full rounded border-gray-400 shadow focus:ring-2 focus:ring-blue-600">
                        </div>
                    </div>

                    <div>
                        <div>
                            <label for="name">Numbe of Document <span class="text-red-500">*</span></label>
                        </div>
                        <div>
                            <input type="text" name="document_mr"
                                class="border w-full rounded border-gray-400 shadow focus:ring-2 focus:ring-blue-600">
                        </div>
                    </div>


                    <div>
                        <div>
                            <label for="name">Numbe of Document <span class="text-red-500">*</span></label>
                        </div>
                        <div>
                            <input type="text" name="document_des"
                                class="border w-full rounded border-gray-400 shadow focus:ring-2 focus:ring-blue-600">
                        </div>
                    </div>
            </div>

        </div>
        <div class="w-full bg-gray-400  py-4 px-4 ">
            <div class="flex items-center justify-start gap-4">
                <div>
                    <button type="submit" id="submit"
                        class="bg-blue-600 py-4 px-8 text-white focus:ring-4 focus:to-blue-300 rounded-md shadow">ثبت
                        فورم</button>
                </div>
                <div>
                    <button type="reset"
                        class="bg-gray-300 focus:ring-4 focus:ring-red-400 py-4 px-8 text-black rounded-md ">لغو
                        فورم</button>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection
@section('js')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> - --}}
    <script>
        $(document).ready(function() {
            $("#form").submit(function(e) {
                e.preventDefault();
                $("#submit").prop("disabled", true)

                var form = $("#form")[0];
                var data = new FormData(form);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('save') }}",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        $("#success_msg").html(` <div class="w-full bg-green-700 rounded text-white py-4">
                           <p class="px-10">${data.res}</p>
                           </div>`)
                        $("#submit").prop("disabled", false)

                    },
                    error: function(erorr) {
                        console.log(erorr);
                    }

                })

            });
        })
    </script>
@endsection
