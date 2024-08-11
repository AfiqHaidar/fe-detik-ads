
    <div class="h-3/4 relative overflow-hidden  rounded-t-2xl ">
        <img class="object-contain rounded-t-2xl transform transition-transform duration-300 ease-in-out group-hover:scale-110" src="{{ asset('storage/' . $image) }}" alt="">
        <div class="absolute w-full bottom-0 h-1/4 bg-gradient-to-t from-[#00D1FF] to-transparent z-10"></div>
    </div>
    <div class="h-1/4 px-5 py-2  grow flex flex-col justify-center w-full items-start bg-[#00D1FF] rounded-b-2xl">
        <div class="text-white font-semibold text-2xl group-hover:text-[#FFE03C] transition-colors duration-300">
            {{ $headline }}
        </div>
        <div class="text-white font-normal text-lg mt-2 ">
            {{ $time }}
        </div>
    </div>


