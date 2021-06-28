<nav x-data="{ open: false }" class="bg-transparent absolute top-0 left-0 w-full">
    <!-- Primary Navigation Menu -->
    <div class="px-4 sm:px-6 lg:px-16 h-24 flex items-center bg-transparent">
        <div class="w-full flex justify-between">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center mr-20">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 md:flex items-center">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link >
                        {{ __('Restaurants') }}
                    </x-nav-link>
                    <x-nav-link >
                        {{ __('About Us') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            @if (Auth::check())
                <user username="{{ Auth::user()->name }}" class="hidden md:flex sm:items-center sm:ml-6" />
            @else
                <div class="hidden md:flex sm:items-center sm:ml-6">
                    <div class="cart relative">
                        <a href="/cart" class="text-white hover:no-underline">
                            <svg class="h-5 w-6" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false"
                                 width="1em" height="1em"
                                 style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                 preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path
                                    d="M12 13a5 5 0 0 1-5-5h2a3 3 0 0 0 3 3a3 3 0 0 0 3-3h2a5 5 0 0 1-5 5m0-10a3 3 0 0 1 3 3H9a3 3 0 0 1 3-3m7 3h-2a5 5 0 0 0-5-5a5 5 0 0 0-5 5H5c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2z"
                                    fill="currentColor"/>
                            </svg>
                        </a>
                        <span class="absolute top-0 -right-0.5 w-3 h-3 text-xs font-bold bg-orange rounded-full flex justify-center items-center">0</span>
                    </div>
                    <x-nav-link>
                        @if (Route::has('login'))
                            <div class="hidden px-6 md:flex gap-4">
                                @auth
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-yellow hover:text-orange font-semibold"><p>Log in<i class="fas fa-sign-in-alt pl-2"></i></p></a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="text-sm text-yellow font-semibold hover:text-orange">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </x-nav-link>
                </div>
            @endif

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center md:hidden">
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
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->

        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                @if (Auth::check())
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                @endif
            </div>

            <div class="mt-3 space-y-1">
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
        </div>
    </div>
</nav>
