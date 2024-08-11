<div id="berita" style="background-image: url('{{ asset('storage/berita-cover.svg') }}');" class="w-screen h-fit bg-cover bg-center flex flex-col justify-center items-center">
    <div class="w-screem h-36 "></div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full flex flex-col justify-center items-start gap-10">
        <div class="w-full overflow-hidden shadow-sm sm:rounded-lg flex justify-start items-start">
            <img class="" src={{ asset('storage/berita-header.svg') }} alt="">
        </div>

        <div class="w-full h-[38rem] flex justify-center items-start">

            <div class="w-1/2 h-full flex flex-col justify-center items-start mr-2 group">
                <x-berita-headnews>
                        <x-slot:image>berita-img1.svg</x-slot:image>
                        <x-slot:headline>Warga Thailand Pakai Boneka Doraemon untuk Ritual Pemanggilan Hujan</x-slot:headline>
                        <x-slot:time>3 jam yang lalu</x-slot:time>
                </x-berita-headnews>
           </div>

            <div class="w-1/2 h-full flex flex-col justify-between items-center ml-2 rounded-3x  ">
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
    <div class="w-screem h-36 "></div>
</div>