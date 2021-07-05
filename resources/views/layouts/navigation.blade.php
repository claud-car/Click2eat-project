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
                    <x-nav-link href="{{ route('aboutUs') }}" :active="request()->routeIs('abousUs')">
                        <p class="cursor-pointer">{{ __('About Us') }}</p>
                    </x-nav-link>
                    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent
                    text-sm font-medium leading-5 text-white hover:text-yellow hover:border-gray-300
                    focus:outline-none focus:text-orange focus:border-gray-300 transition duration-150
                    ease-in-out" href="#footer">{{ __('Contact Us')}}
                    </a>
                </div>
            </div>


            <!-- Settings Dropdown -->
            <div class="flex items-center">
                @if (Auth::check())
                    <div>
                      <user username="{{ Auth::user()->name }}" class="flex sm:items-center sm:ml-6" />
                    </div>
                    <mobile-btn :is-logged="true" />
                @else
                    <div class="flex items-center ml-6">
                        <div class="phone text-orange hidden lg:flex lg:items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" class="relative top-0.5 w-6 h-8" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path d="M26 29h-.17C6.18 27.87 3.39 11.29 3 6.23A3 3 0 0 1 5.76 3h5.51a2 2 0 0 1 1.86 1.26L14.65 8a2 2 0 0 1-.44 2.16l-2.13 2.15a9.37 9.37 0 0 0 7.58 7.6l2.17-2.15a2 2 0 0 1 2.17-.41l3.77 1.51A2 2 0 0 1 29 20.72V26a3 3 0 0 1-3 3zM6 5a1 1 0 0 0-1 1v.08C5.46 12 8.41 26 25.94 27a1 1 0 0 0 1.06-.94v-5.34l-3.77-1.51l-2.87 2.85l-.48-.06c-8.7-1.09-9.88-9.79-9.88-9.88l-.06-.48l2.84-2.87L11.28 5z" fill="currentColor"/></svg>
                            <label class="text-white font-light pr-8 pl-2"> +39 123 45 67 890</label></i>
                        </div>

                        <div class="hidden md:block">
                            <cart-total />
                        </div>

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
                    </div>
                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center md:hidden">
                        <div class="mr-6">
                            <cart-total />
                        </div>

                        <mobile-btn :is-logged="false" />
                    </div>
                @endif
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
