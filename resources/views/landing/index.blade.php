<x-home-app>
    {{-- hero --}}
    <div class="bg-[#34353A] shadow-lg flex justify-center items-center h-[83vh] relative">
        <div class=" w-[70%] h-48">
            <div class="pb-4">

                <span class="text-3xl text-[#E6E7E9] font-semibold me-4">I'M</span><span
                    class="text-[#FFC86B] text-6xl font-bold">Abd. Rahmat
                    Lahay</span>

            </div>
            <div class="pb-8">

                <span class="text-3xl text-[#E6E7E9] font-semibold">Web Dev & Design System</span>

            </div>
            <div>
                <a href="#" class="px-6 py-3 border-4 rounded-lg border-[#FFC86B] text-[#FFC86B]">COntact Me</a>
            </div>
        </div>
        <div class="absolute bottom-0 right-52">
            <img src="{{ asset('img/profile.png') }}" class="w-full h-full" alt="">
        </div>
    </div>
    <div class="bg-[#31333B] flex justify-center pb-12">
        <div class="w-[90%]">
            {{-- About --}}
            <h3 class="text-5xl font-bold text-white py-10">About</h3>
            <div class="w-full grid lg:grid-cols-10 gap-3">
                <div class="flex pt-4">
                    <div class="w-full ">
                        <div class="py-1 px-4 bg-[#FFC86B]"></div>
                    </div>
                </div>
                <div class="col-span-9 text-2xl text-white">Active 6th semester student at the Department of
                    Information
                    Engineering, Gorontalo State University. Have the spirit
                    high in the world of technology and active in social activities. Good communication skills and soul
                    Leadership has been proven in participation in several organizational activities. With expertise in
                    the field
                    IT, especially in web and mobile development, I am ready to contribute with creative thinking and
                    problem solving abilities in a professional environment.</div>
            </div>
            {{-- End About --}}
            {{-- My Skills --}}
            <h3 class="text-5xl text-center font-bold text-white py-10">My Skill</h3>
            {{-- End My Skills --}}

            <div class="grid lg:grid-cols-4 gap-2">


                <div
                    class="w-full max-w-sm hover:bg-[#FFC86B] bg-[#3D3E42] rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-3">
                    <div class="py-4 flex justify-center items-center">

                        <img src="{{ asset('img/img-card.png') }}" class="w-2/3 bg-cover" alt="">
                    </div>
                    <h3 class="text-white text-center text-2xl font-bold mb-5">Python</h3>
                </div>
                <div
                    class="w-full max-w-sm hover:bg-[#FFC86B] bg-[#3D3E42] rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-3">
                    <div class="py-4  flex justify-center items-center">

                        <img src="{{ asset('img/img-card-1.png') }}" class="w-2/3 bg-cover" alt="">
                    </div>
                    <h3 class="text-white text-center text-2xl font-bold mb-5">Html</h3>
                </div>
                <div
                    class="w-full max-w-sm hover:bg-[#FFC86B] bg-[#3D3E42] rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-3">
                    <div class="py-4  flex justify-center items-center">

                        <img src="{{ asset('img/img-card-2.png') }}" class="w-2/3 bg-cover" alt="">
                    </div>
                    <h3 class="text-white text-center text-2xl font-bold mb-5">Css</h3>
                </div>
                <div
                    class="w-full max-w-sm hover:bg-[#FFC86B] bg-[#3D3E42] rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-3">
                    <div class="py-4 flex justify-center items-center bg">

                        <img src="{{ asset('img/img-card-3.jpg') }}" class="w-2/3" alt="">
                    </div>
                    <h3 class="text-white text-center text-2xl font-bold mb-5">Javascript</h3>
                </div>
            </div>
        </div>
    </div>
    {{-- hero --}}
    {{-- about --}}
    <div class="bg-[#3D3E42] py-16 relative">
        <h3 class="text-5xl font-bold text-white  absolute -top-8 left-16">Experience</h3>
        <div class="py-28 flex justify-center">
            <ol class="relative border-s-4 border-slate-300 dark:border-gray-700 w-1/2">
                <li class="mb-10 ms-8">
                    <div
                        class="absolute w-7 h-7 bg-[#FFC86B] rounded-full mt-2.5 -start-[16px] dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <div
                        class="font-semibold absolute rounded-r-lg  bg-slate-400  mt-1.5 -start-[100px]  dark:border-gray-900 dark:bg-gray-700 px-5 py-2 text-white">
                        2021
                    </div>
                    <a href="#">

                        <time class="mb-1 text-lg font-semibold leading-none text-gray-200 dark:text-gray-500">1st Place
                            in
                            the IT Software Competition at the National Activity of Indonesian Youth Creativity
                            Week</time>
                    </a>
                    <h3 class="text-lg font-semibold text-gray-300 dark:text-white">Programer</h3>
                    </h3>
                    <p class="mb-4 text-base font-normal text-gray-400 dark:text-gray-400">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Suscipit incidunt corporis sapiente error ducimus eum quisquam
                        nostrum ad reiciendis dolore! Magnam tenetur minima natus quos animi molestias ex ratione et.
                    </p>
                </li>
                <li class="mb-10 ms-8">
                    <div
                        class="absolute w-7 h-7 bg-[#FFC86B] rounded-full mt-2.5 -start-[16px] dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <div
                        class="font-semibold absolute rounded-r-lg  bg-slate-400  mt-1.5 -start-[100px]  dark:border-gray-900 dark:bg-gray-700 px-5 py-2 text-white">
                        2022
                    </div>
                    <a href="#">

                        <time class="mb-1 text-lg font-semibold leading-none text-gray-200 dark:text-gray-500">Finalist
                            (The Most Inspiring Team) Software Development at GemasTik XV</time>
                    </a>
                    <h3 class="text-lg font-semibold text-gray-300 dark:text-white">Leader</h3>
                    <p class="mb-4 text-base font-normal text-gray-400 dark:text-gray-400">Lorem ipsum dolor sit
                        amet,
                        consectetur adipisicing elit. Suscipit incidunt corporis sapiente error ducimus eum quisquam
                        nostrum ad reiciendis dolore! Magnam tenetur minima natus quos animi molestias ex ratione
                        et.
                    </p>
                </li>
                <li class="mb-10 ms-8">
                    <div
                        class="absolute w-7 h-7 bg-[#FFC86B] rounded-full mt-2.5 -start-[16px] dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <div
                        class="font-semibold absolute rounded-r-lg  bg-slate-400  mt-1.5 -start-[100px]  dark:border-gray-900 dark:bg-gray-700 px-5 py-2 text-white">
                        2023
                    </div>
                    <a href="#">

                        <time class="mb-1 text-lg font-semibold leading-none text-gray-200 dark:text-gray-500">Finalist
                            (The Most Inspiring Team) Software Development at GemasTik XV</time>
                    </a>
                    <h3 class="text-lg font-semibold text-gray-300 dark:text-white">Leader</h3>
                    <p class="mb-4 text-base font-normal text-gray-400 dark:text-gray-400">Lorem ipsum dolor sit
                        amet,
                        consectetur adipisicing elit. Suscipit incidunt corporis sapiente error ducimus eum quisquam
                        nostrum ad reiciendis dolore! Magnam tenetur minima natus quos animi molestias ex ratione
                        et.
                    </p>
                </li>
            </ol>
        </div>
    </div>
    {{-- end about --}}
    {{-- Experience --}}
    <div class="bg-[#31333B] flex justify-center pt-20 pb-20 relative">
        <div class="absolute -top-9 w-full grid lg:grid-cols-5">
            <div class="w-full col-span-2">
                <hr class="w-full h-1 my-8 bg-[#FFC86B] border-0 rounded dark:bg-gray-700">
            </div>

            <div class="w-full text-5xl font-bold text-white flex justify-center items-center">
                Contact Me
            </div>

            <div class="w-full col-span-2">
                <hr class="w-full h-1 my-8 bg-[#FFC86B] border-0 rounded dark:bg-gray-700">
            </div>
        </div>
        <div class="w-full flex flex-wrap justify-center">
            <div class="bg-[#3D3E42] w-2/6 rounded-lg px-3 py-2 flex items-center text-white me-4 mb-4"><i
                    class="fa-regular fa-envelope text-4xl me-3"></i><span
                    class="text-2xl text-[#FFC86B]">@rahmatlahay84@gmail.com</span></div>
            <div class="bg-[#3D3E42] w-2/6 rounded-lg  px-3 py-2 flex items-center text-white mb-4 "><i
                    class="fa-solid fa-phone text-4xl me-3"></i><span
                    class="text-2xl text-[#FFC86B]">+62895-3930-67823</span></div>
            <div class="bg-[#3D3E42] w-2/6 rounded-lg  px-3 py-2 flex items-center text-white "><i
                    class="fa-solid fa-location-dot text-4xl me-3"></i><span
                    class="text-2xl text-[#FFC86B]">Gorontalo</span></div>
        </div>
    </div>
    {{-- End Experience --}}
    {{-- Experience --}}

    <div class="bg-[#31333B] flex justify-center pt-20 pb-20 relative">
        <div class="absolute -top-9 w-full grid lg:grid-cols-5">
            <div class="w-full col-span-2">
                <hr class="w-full h-1 my-8 bg-[#FFC86B] border-0 rounded dark:bg-gray-700">
            </div>

            <div class="w-full text-white flex justify-evenly items-center">
                <a href=""><i class="fa-brands fa-facebook-f text-4xl me-3"></a></i>
                <a href=""><i class="fa-brands fa-github text-4xl me-3"></a></i>
                <a href=""><i class="fa-brands fa-linkedin text-4xl me-3"></a></i>
                <a href=""><i class="fa-brands fa-instagram text-4xl me-3"></a></i>

            </div>

            <div class="w-full col-span-2">
                <hr class="w-full h-1 my-8 bg-[#FFC86B] border-0 rounded dark:bg-gray-700">
            </div>
        </div>
        <div class="w-full"></div>

    </div>
    {{-- End Experience --}}

</x-home-app>
