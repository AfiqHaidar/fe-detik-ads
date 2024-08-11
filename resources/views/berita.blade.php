<div id="berita" style="background-image: url('{{ asset('storage/berita-cover.svg') }}');" class="w-screen h-fit bg-cover bg-center flex flex-col justify-center items-center">
    <div class="w-screem h-36 "></div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full flex flex-col justify-center items-start gap-10">
        <div class="w-full overflow-hidden shadow-sm sm:rounded-lg flex justify-start items-start">
            <img class="" src={{ asset('storage/berita-header.svg') }} alt="">
        </div>

        <div class="w-full flex justify-center items-center">
            <div class="W-1/2 w-full flex flex-col justify-center items-start m-2 group">
                <div class="relative overflow-hidden  rounded-t-3xl">
                    <img class="object-contain rounded-t-3xl transform transition-transform duration-300 ease-in-out group-hover:scale-110" src="{{ asset('storage/berita-img1.svg') }}" alt="">
                    <div class="absolute w-full bottom-0 h-1/4 bg-gradient-to-t from-[#00D1FF] to-transparent z-10"></div>
                </div>
                <div class="px-5 py-5 flex flex-col justify-center w-full items-start bg-[#00D1FF] rounded-b-3xl">
                    <div class="text-white font-semibold text-3xl group-hover:text-[#FFE03C] transition-colors duration-300">
                        Warga Thailand Pakai Boneka Doraemon untuk Ritual Pemanggilan Hujan
                    </div>
                    <div class="text-white font-normal text-lg mt-2">
                        3 jam yang lalu
                    </div>
                </div>
            </div>
            

            <div class="W-1/2 w-full bg-black h-10">
                
            </div>

        </div>

{{-- 

        <div class="w-full overflow-hidden shadow-sm sm:rounded-lg">
            <img class="" src={{ asset('storage/program-image.svg') }} alt="">
        </div>

        <div class="w-full h-fit overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-10">
            <div class="flex flex-col gap-2">
                <div class=" text-white font-bold text-4xl">
                    Tentang Program
                </div>
                <div class=" text-white font-normal">
                    Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini terbuka bagi pembaca Detiktravel yang ingin menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan seperti pantai Pak Bia Island dan destinasi lain di Phuket, Thailand. Jadi bagian dari perjalanan kami dan menangkan hadiah jalan-jalan yang tak terlupakan!
                </div>
                <x-yellow-button link="#tentang-program">
                    DAFTAR SEKARANG
                </x-yellow-button>
            </div>
            <div class="flex flex-col gap-2">
                <div class=" text-white font-bold text-4xl mb-2">
                    Mekanisme
                </div>
                <x-program-mekanisme>
                    <x-slot:title>Isi Formulir</x-slot:title>
                    <x-slot:date>1 - 31 Mei 2023</x-slot:date>
                    <x-slot:desc>Lengkapi formulir pendaftaran dengan data sebenarnya</x-slot:desc>
                </x-program-mekanisme>
                <x-program-mekanisme>
                    <x-slot:title>Penjuarian</x-slot:title>
                    <x-slot:date>1 - 7 Juni 2023</x-slot:date>
                    <x-slot:desc>Ikuti rangkaian penjurian online/offline</x-slot:desc>
                </x-program-mekanisme>
                <x-program-mekanisme>
                    <x-slot:title>Pengumuman Pemenang</x-slot:title>
                    <x-slot:date>11 Juni 2023</x-slot:date>
                    <x-slot:desc>Ikuti rangkaian penjurian online/offline</x-slot:desc>
                </x-program-mekanisme>
            </div>
        </div> --}}
    </div>
    <div class="w-screem h-36 "></div>
</div>