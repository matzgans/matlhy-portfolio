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
    <div class="bg-[#31333B] shadow-lg shadow-black flex justify-center">
        <div class="w-[90%]">
            {{-- About --}}
            <h3 class="text-5xl font-bold text-white py-10">About</h3>
            <div class="w-full grid lg:grid-cols-10 gap-3">
                <div class="flex pt-4">
                    <div class="w-full ">
                        <div class="py-1 px-4 bg-[#FFC86B]"></div>
                    </div>
                </div>
                <div class="col-span-9 text-2xl text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Pariatur
                    tempore ipsum
                    earum. Eum iusto minima dolore sapiente necessitatibus ipsam aliquid porro dignissimos. Commodi
                    magnam, omnis magni similique odio unde atque. Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Aliquam necessitatibus quasi a cum commodi, cumque molestias, vero hic suscipit sequi rem
                    obcaecati voluptatibus! Nesciunt magni molestias cupiditate ex maiores excepturi!</div>
            </div>
            {{-- End About --}}
            {{-- My Skills --}}
            <h3 class="text-5xl text-center font-bold text-white py-10">My Skill</h3>
            {{-- End My Skills --}}
        </div>
    </div>
    {{-- hero --}}
</x-home-app>
