<div class="relative">
    <div class="w-screen h-screen  ">
    <div id="home" style="background-image: url('{{ asset('storage/home-cover1.svg') }}');" class="absolute z-5 w-screen h-screen bg-cover bg-center transition-bg-image"></div>
    <div class="w-screen h-screen flex justify-between sm:items-end items-center z-20 absolute ">
        <div class="max-w-7xl sm:mx-auto sm:px-6 lg:px-8 w-full h-full sm:h-fit flex flex-col sm:flex-row  justify-between items-center gap-2 mb-20 mx-5">

           
         
            <div class="w-full overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="h-[10rem]"></div>
                <img class="mb-5" src="{{ asset('storage/home-title.svg') }}" alt="">
                <x-yellow-button link="#tentang-program">
                    TENTANG PROGRAM
                </x-yellow-button>
            </div>


            <div class="w-full h-fit rounded-3xl flex justify-end gap-3">
                <a href="#" class="home-cover-change" data-cover="home-cover1.svg">
                    <img class="w-40 rounded-3xl shadow-white shadow-2xl" src="{{ asset('storage/home-small1.svg') }}" alt="">
                </a>
                <a href="#" class="home-cover-change" data-cover="home-cover2.svg">
                    <img class="w-40 rounded-3xl shadow-white shadow-2xl" src="{{ asset('storage/home-small2.svg') }}" alt="">
                </a>
                <a href="#" class="home-cover-change" data-cover="home-cover3.svg">
                    <img class="w-40 rounded-3xl shadow-white shadow-2xl" src="{{ asset('storage/home-small3.svg') }}" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="absolute w-full bottom-0 h-10 bg-gradient-to-t from-[#00D1FF] to-transparent z-10"></div>
</div>