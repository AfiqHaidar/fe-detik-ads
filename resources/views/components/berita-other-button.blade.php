@props(['link'])

@php
$classes = 'flex items-center text-sm sm:w-full w-fit  font-bold text-[#212427] transition duration-150 ease-in-out';
@endphp


<a href="{{ $link }}" {{ $attributes->merge(['class' => $classes]) }}>
        <div class="flex justify-center gap-3 sm:py-5 py-2 px-5 sm:px-0 text-center xl:text-xl sm:text-lg text-md  text-white w-full bg-[#00D1FF] font-white hover:bg-[#FFC73C]  rounded-lg sm:rounded-2xl transition duration-150 ease-in-out">
            {{ $slot }} 
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
              </svg>
              
        </div>
</a>
