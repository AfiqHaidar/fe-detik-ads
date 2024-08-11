<nav x-data="{ open: false }" class="bg-transparent fixed w-full z-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl sm:mx-auto px-4 sm:px-6 lg:px-8 bg-white/50 backdrop-blur-md  mt-7 mx-5 " :class="{'rounded-t-[2rem]': open, 'rounded-[3rem]': ! open}">
        <div class="flex justify-between sm:h-20 h-14">
            <div class="flex w-full justify-between ">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="sm:shrink-0 flex items-center">
                    <img class="object-contain sm:w-3/4 w-[70%]" src="{{ asset('storage/logo.svg') }}" alt="">
                </a>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link link="{{ route('home') }}" mode="transparent">
                        Home
                    </x-nav-link>

                    <x-nav-link link="#tentang-program" mode="transparent">
                        Tentang Program
                    </x-nav-link>

                    <x-nav-link link="#berita" mode="transparent">
                        Berita
                    </x-nav-link>

                    <x-nav-link link="{{ route('register') }}" mode="yellow">
                        Registrasi
                    </x-nav-link>
                </div>

            </div>

            {{-- <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                 
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>Nama</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('dashboard')">
                                satu
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('dashboard')">
                                dua
                            </x-dropdown-link>
                            
                        </x-slot>
                
                </x-dropdown>
            </div> --}}

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden ">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-white mr-2 bg-[#FFC73C] rounded-full focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden relative max-w-7xl mx-5">
        <div class="space-y-4 w-full py-3 bg-red-600 bg-white/50 backdrop-blur-md rounded-b-[2rem] absolute  -z-20" >
            <x-responsive-nav-link link="{{ route('home') }}" mode="transparent">
                Home
            </x-responsive-nav-link>

            <x-responsive-nav-link link="#tentang-program" mode="transparent">
                Tentang Program
            </x-responsive-nav-link>

            <x-responsive-nav-link link="#berita" mode="transparent">
                Berita
            </x-responsive-nav-link>

            <x-responsive-nav-link link="{{ route('register') }}" mode="yellow">
                Registrasi
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            {{-- @auth()
            <div class="px-4">
               
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
             
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
            @endauth --}}
        </div>
    </div>
</nav>
