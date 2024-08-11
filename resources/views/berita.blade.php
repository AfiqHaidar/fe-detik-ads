<div id="berita" style="background-image: url('{{ asset('storage/berita-cover.svg') }}');" class="w-screen h-fit bg-cover bg-center flex flex-col justify-center items-center">
    <div class="w-screen  sm:h-36 h-20 "></div>
    <div class="max-w-7xl sm:mx-auto mx-5 sm:px-6 lg:px-8 w-full flex flex-col justify-center items-start gap-10">
        <div class="w-full overflow-hidden  sm:mx-auto mx-5 shadow-sm sm:rounded-lg flex justify-start items-start">
            <img class="sm:w-full w-3/4" src={{ asset('storage/berita-header.svg') }} alt="">
        </div>

        <div class="w-full xl:h-[38rem] lg:h-[30rem] md:h-[22rem] h-fit flex sm:flex-row flex-col justify-center items-start sm:gap-0 gap-4 sm:px-0 px-5">

            <div class="sm:w-1/2 w-full h-full flex flex-col justify-center items-start mr-2 group ">
                <x-berita-headnews>
                        <x-slot:image>berita-img1.svg</x-slot:image>
                        <x-slot:headline>Warga Thailand Pakai Boneka Doraemon untuk Ritual Pemanggilan Hujan</x-slot:headline>
                        <x-slot:time>3 jam yang lalu</x-slot:time>
                </x-berita-headnews>
           </div>

            <div class="sm:w-1/2 w-full h-full flex flex-col justify-between items-center ml-2 rounded-3x sm:gap-0 gap-4 ">
                <x-berita-sidenews>
                    <x-slot:image>berita-img1.svg</x-slot:image>
                    <x-slot:headline>Thailand Ngarep Cuan Banyak dari Turis China dan Jepang</x-slot:headline>
                    <x-slot:time>1 jam yang lalu</x-slot:time>
               </x-berita-sidenews>
               <x-berita-sidenews>
                    <x-slot:image>berita-img1.svg</x-slot:image>
                    <x-slot:headline>Cahaya Lampu Hiasi Kuil Wat Pha Dhammakaya Thailand Saat Waisak</x-slot:headline>
                    <x-slot:time>1 jam yang lalu</x-slot:time>
                </x-berita-sidenews>
                <x-berita-sidenews>
                    <x-slot:image>berita-img1.svg</x-slot:image>
                    <x-slot:headline>Cantiknya Lisa BLACKPINK Berwisata Sejarah di Thailand</x-slot:headline>
                    <x-slot:time>1 jam yang lalu</x-slot:time>
                </x-berita-sidenews>
                <x-berita-other-button link="#" >Lihat Berita Lainnya</x-berita-other-button>
            </div>
        </div>

    </div>
    <div class="w-screen  sm:h-36 h-20 "></div>
</div>