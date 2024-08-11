 <div class="relative">
    <div id="home" style="background-image: url('{{ asset('storage/home-cover.svg') }}');" class="w-screen h-screen bg-cover bg-center flex justify-between items-end">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full flex justify-center items-center gap-2 mb-20">
            <div class="w-full overflow-hidden shadow-sm sm:rounded-lg">
                <img class=" mb-5 " src={{ asset('storage/home-title.svg') }} alt="">
                <x-yellow-button link="#tentang-program" >
                    TENTANG PROGRAM
                </x-yellow-button>
            </div>

            <div class="bg-white w-full h-40 overflow-hidden shadow-sm sm:rounded-lg">
                
            </div>
        </div>
    </div>
    <div class="absolute w-full bottom-0 h-10 bg-gradient-to-t from-[#00D1FF] to-transparent z-10"></div>
</div>
