<div>
    <div>
        <nav class="bg-white shadow-md h-14 flex items-center justify-between ">
            <div class="menu flex items-center justify-center mr-10">
                <div class="profile flex items-center justify-center">
                    <div class="flex items-end ml-5  cursor-pointer  hover:bg-gray-400" id="showProfile">
                        <img src="{{ asset('images/main.jpg') }}" class="rounded-full h-16 w-16 hover:bg-gray-400"
                            alt="">
                    </div>
                    <ul
                        class="absolute toggle transition-all  top-20 left-20 bg-white shadow-lg flex items-center justify-center flex-col  w-80">
                        <li class="hover:bg-gray-400 w-80 py-4 text-center font-semibold">
                            <a href="#">Sign Out</a>
                        </li>
                        <li class="hover:bg-gray-400 w-80 py-4 text-center border-t font-semibold border-gray-400">
                            <a href="#">Profile</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>
</div>

<style>
    .toggle {
        display: none;
    }

    .fade {
        display: flex;
    }
</style>
