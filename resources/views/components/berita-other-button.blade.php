@props(['link'])

@php
$classes = 'flex items-center text-sm w-full  font-bold text-[#212427] transition duration-150 ease-in-out';
@endphp


<a href="{{ $link }}" {{ $attributes->merge(['class' => $classes]) }}>
        <div class="py-5 text-center text-xl  text-white w-full bg-[#00D1FF] font-white hover:bg-[#FFC73C]  rounded-2xl transition duration-150 ease-in-out">
            {{ $slot }}
        </div>
</a>
