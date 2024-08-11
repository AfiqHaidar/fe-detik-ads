@props(['mode', 'link'])


<a href="{{ $link }}" class="w-full text-center gap-4 flex justify-center">
    @if ($mode == 'transparent')
        <div class="text-black">
            {{ $slot }}
        </div>
    @elseif ($mode == 'yellow')
        <div class="w-3/4 text-center text-white px-5 py-2 shadow-lg shadow-[#FFD36735] bg-[#FFC73C] font-white hover:bg-[#ffa43c]  rounded-[2rem]">
            {{ $slot }}
        </div>
    @endif
</a>
