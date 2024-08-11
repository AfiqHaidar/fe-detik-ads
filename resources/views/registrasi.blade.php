<x-app-layout>
<div id="registrasi" style="background-image: url('{{ asset('storage/registrasi-cover.svg') }}');" class="w-screen h-fit bg-cover bg-center flex flex-col justify-center items-center">
    <div class="w-screen sm:h-[12rem] h-[10rem] "></div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full flex flex-col justify-start items-center gap-10">
        <div class="flex flex-col w-full justify-center items-center gap-2">
            <div class=" text-white font-bold text-4xl">
                Registrasi
            </div>
            <div class=" text-white font-normal">
                Lengkapi data diri kamu dengan benar
            </div>
        </div>

        <div class="sm:w-[60%] w-[90%] flex justify-center items-center bg-[#ffffff] rounded-2xl" action="">
            <form class="m-10  w-full flex items-center justify-center flex-col">
                <div class=" w-full mb-7">
                    <input type="nama" id="nama" class="bg-[#F8F8F8] border border-transparent text-[#071424] text-sm rounded-lg focus:ring-transparent focus:border-transparent block w-full p-2.5 " placeholder="Nama Lengkap" required />
                </div>
                <div class=" w-full mb-7">
                    <input type="email" id="email" class="bg-[#F8F8F8] border border-transparent text-[#071424] text-sm rounded-lg focus:ring-transparent focus:border-transparent block w-full p-2.5 " placeholder="Email" required />
                </div>
                <div class=" w-full mb-7">
                    <input type="number" id="notelp" class="bg-[#F8F8F8] border border-transparent text-[#071424] text-sm rounded-lg focus:ring-transparent focus:border-transparent block w-full p-2.5 " placeholder="Nomor Telepon" required />
                    <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Isi hanya angka</p>
                </div>
                <div class=" w-full mb-7">
                    <textarea type="alasan" id="alasan" class="bg-[#F8F8F8] h-32 border border-transparent text-[#071424] text-sm rounded-lg focus:ring-transparent focus:border-transparent block w-full p-2.5 " placeholder="Alasan mengikuti program “Explore Thailand by Detiktravel”*" required ></textarea>
                </div>
                <div class=" w-full mb-7">
                    <input type="ig" id="ig" class="bg-[#F8F8F8] border border-transparent text-[#071424] text-sm rounded-lg focus:ring-transparent focus:border-transparent block w-full p-2.5 " placeholder="Link Instagram" required />
                    <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Contoh: https://www.instagram.com/yourusername</p>
                </div>
                <div class="w-full mb-7 flex items-start">
                    <div class="flex items-center h-5">
                        <input id="sk" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " required />
                    </div>
                    <label for="sk" class="ms-2 text-sm font-medium text-[#071424] ">Dengan menekan tombol "Daftar", Saya menyetujui <a href="" class="text-[#00D1FF]">syarat dan ketentuan</a> yang berlaku</label>
                  </div>
              
                <button type="submit" class="text-white bg-[#00D1FF] hover:bg-[#FFC73C] focus:ring-4 focus:outline-none focus:ring-transparent font-medium rounded-lg  w-full sm:w-auto  px-24 py-2 text-center ">Daftar</button>
              </form>
            </div>

    </div>
    <div class="w-screem h-36 "></div>
</div>
</x-app-layout>