
    <div class="flex justify-center items-start  gap-2 rounded-2xl group">
        <div class="w-1/3 overflow-hidden rounded-2xl">
            <img class="w-full object-contain rounded-2xl transform transition-transform duration-300 ease-in-out group-hover:scale-110" src="{{ asset('storage/' . $image) }}" alt="">
        </div>
        <div class="w-2/3 flex flex-col justify-start items-start">
            <div class="text-black font-semibold xl:text-xl md:text-md text-sm group-hover:text-[#00D1FF] transition-colors duration-300">
                {{ $headline }}
            </div>
            <div class="text-[#6C6C6C] font-normal xl:text-lg  md:text-sm text-xs mt-2">
                {{ $time }}
            </div>
        </div>
    </div>
