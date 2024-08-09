@props(['mode', 'link'])

@php
$classes = 'inline-flex items-center px-1 pt-1 text-sm  font-bold text-[#212427] transition duration-150 ease-in-out';
@endphp


<a href="{{ $link }}" {{ $attributes->merge(['class' => $classes]) }}>
    @if ($mode == 'transparent')
        <div class="flex px-5 py-2  hover:bg-white/70 hover:outline-2  hover:outline hover:outline-white rounded-[2rem] transition duration-150 ease-in-out">
            {{ $slot }}
        </div>
    @elseif ($mode == 'yellow')
        <div class="flex text-white px-5 py-2 shadow-lg shadow-[#FFD36735] bg-[#FFC73C] font-white hover:bg-[#ffa43c]  rounded-[2rem] transition duration-300 ease-in-out">
            {{ $slot }}
        </div>
    @endif
</a>
