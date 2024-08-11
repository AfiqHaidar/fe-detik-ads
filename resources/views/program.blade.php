<div id="tentang-program" style="background-image: url('{{ asset('storage/program-cover.svg') }}');" class="w-screen h-fit bg-cover bg-center flex flex-col justify-center items-center">
    <div class="w-screen sm:h-36 h-20 "></div>
    <div class="max-w-7xl  sm:mx-auto mx-5 sm:px-6 lg:px-8 w-full flex sm:flex-row flex-col justify-center items-start gap-10">
        <div class="w-full overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
            <img class="sm:w-full w-5/6" src={{ asset('storage/program-image.svg') }} alt="">
        </div>

        <div class="w-full h-fit overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-10 sm:mx-auto mx-5">
            <div class="flex flex-col gap-2 ">
                <div class=" text-white font-bold text-4xl">
                    Tentang Program
                </div>
                <div class=" text-white font-normal">
                    Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini terbuka bagi pembaca Detiktravel yang ingin menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan seperti pantai Pak Bia Island dan destinasi lain di Phuket, Thailand. Jadi bagian dari perjalanan kami dan menangkan hadiah jalan-jalan yang tak terlupakan!
                </div>
                <x-yellow-button link="{{ route('register') }}" >
                    DAFTAR SEKARANG
                </x-yellow-button>
            </div>
            <div class="flex flex-col gap-2 ">
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
        </div>
    </div>
    <div class=" sm:h-36 h-20 "></div>
</div>