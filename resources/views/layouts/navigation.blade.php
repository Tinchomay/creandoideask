<nav x-data="{ open: false }" class=" bg-pink-100 border-b border-gray-100 fixed top-0 w-full z-10 shadow-md">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Inicio') }}
                    </x-nav-link>
                    <x-nav-link :href="route('pinatas')" :active="request()->routeIs('pinatas')">
                        {{ __('Piñatas') }}
                    </x-nav-link >
                    <x-nav-link :href="route('manualidades')" :active="request()->routeIs('manualidades')">
                        {{ __('Manualidades') }}
                    </x-nav-link>
                    <x-nav-link :href="route('nosotros')" :active="request()->routeIs('nosotros')">
                        {{ __('Quienes Somos') }}
                    </x-nav-link>
                </div>
            </div>
            <div class="sm:hidden flex items-center">
                <p class=" text-pink-300 flex items-center">
                    Creando Ideas K
                </p>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500  hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            @auth
                                <div>{{ Auth::user()->name }}</div>
                            @endauth

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                            @guest
                                <x-dropdown-link :href="route('login')">
                                        {{ __('Admin') }}
                                </x-dropdown-link>
                            @endguest
                            @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </x-dropdown-link>
                            @endauth
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Inicio') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('pinatas')" :active="request()->routeIs('pinatas')">
                {{ __('Piñatas') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('manualidades')" :active="request()->routeIs('manualidades')">
                {{ __('Manualidades') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('nosotros')" :active="request()->routeIs('nosotros')">
                {{ __('Quienes Somos') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-1 pb-2 border-t border-gray-200">
            <div class="px-4">
                @auth
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                @endauth
            </div>
            <div class="space-y-1">
                    @guest
                        <x-responsive-nav-link :href="route('login')">
                            {{ __('Administrar') }}
                        </x-responsive-nav-link>
                    @endguest
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Cerrar sesión') }}
                        </x-responsive-nav-link>
                    </form>
                    @endauth
            </div>
        </div>
    </div>
</nav>
