<nav x-data="{ open: false }" x-init="() => {
    window.addEventListener('scroll', () => {

        const navbar = document.getElementById('navbar');

        if (navbar) {
            if (window.scrollY > 50) {
                navbar.classList.add('bg-gray-100', 'dark:bg-gray-800', 'transition-colors', 'duration-300', 'ease-in-out');
                navbar.classList.remove('bg-blue-100', 'dark:bg-gray-900');
            } else {
                navbar.classList.add('bg-blue-100', 'dark:bg-gray-900', 'transition-colors', 'duration-300', 'ease-in-out');
                navbar.classList.remove('bg-gray-100', 'dark:bg-gray-800');
            }
        }
    });
}" id="navbar"
    class="w-full py-2 bg-blue-100 dark:bg-gray-900 border-b border-gray-400 dark:border-gray-700 transition-colors duration-300 ease-in-out">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="w-[33%] gap-2 flex justify-center items-center">
                <!-- Logo -->
                <a href="{{ route('homepage') }}" class="shrink-0 flex items-center" wire:navigate>
                    <x-application-logo />
                </a>
                {{-- @auth
                        <form class="w-52 flex items-center">
                            <label for="search" class="absolute ml-2">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </label>
                            <input type="text" id="search"
                                class="h-11 w-full pl-9 rounded-lg border border-gray-200 bg-white/50 dark:bg-dark-900  py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-800 dark:bg-gray-900 dark:bg-white/[0.03] dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
                                placeholder="Search Quickpost" />
                        </form>
                    @endauth --}}
                <form class="w-52 flex items-center">
                    <label for="search" class="absolute ml-2">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </label>
                    <input type="text" id="search"
                        class="h-11 w-full pl-9 rounded-lg border border-gray-200 bg-white/50 dark:bg-dark-900  py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-800 dark:bg-gray-900 dark:bg-white/[0.03] dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
                        placeholder="Search Quickpost" />
                </form>
            </div>

            <div class="w-[33%] gap-8 flex justify-center items-center">
                @guest
                    <x-nav-link :href="route('homepage')" :active="request()->routeIs('homepage')" wire:navigate>
                        {{ __('Home') }}
                    </x-nav-link>

                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')" wire:navigate>
                        {{ __('About Us') }}
                    </x-nav-link>

                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" wire:navigate>
                        {{ __('Contact') }}
                    </x-nav-link>
                @endguest
                <x-nav-link>
                    {{ __('Explore') }}
                </x-nav-link>
                @auth
                @endauth
            </div>

            <div class="w-[33%] flex items-center justify-end gap-4">
                <!-- Theme Toggle -->
                <button id="theme-toggle" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z">
                        </path>
                    </svg>
                </button>
                <!-- Guest Links -->
                @guest
                    <div class="hidden sm:flex space-x-8">
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')" wire:navigate>
                            {{ __('Log in') }}
                        </x-nav-link>

                        <x-nav-link :href="route('register')" :active="request()->routeIs('register')" wire:navigate>
                            {{ __('Register') }}
                        </x-nav-link>
                    </div>
                @endguest

                @auth
                    <div class="hidden sm:flex sm:items-center">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div class="w-10 h-10 rounded-full overflow-hidden bg-neutral-400 dark:bg-neutral-200">
                                        <img src="{{ asset(auth()->user()->avatar) }}" alt="error"
                                            class="w-full h-full object-cover rounded-full">
                                    </div>
                                    <svg class="ms-1 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link>
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('profile')" wire:navigate>
                                    {{ __('Settings') }}
                                </x-dropdown-link>
                                <button wire:click="logout" class="w-full text-start">
                                    <x-dropdown-link>
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </button>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endauth
                <!-- Hamburger Button -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = !open"
                        class="p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Nav for Authenticated Users -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('homepage')" :active="request()->routeIs('homepage')" wire:navigate>
                {{ __('Home') }}
            </x-responsive-nav-link>
            @auth
                <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" wire:navigate>
                    {{ __('Admin Dashboard') }}
                </x-responsive-nav-link>
            @endauth
        </div>

        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            @guest
                <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')" wire:navigate>
                    {{ __('Login') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('register')" wire:navigate>
                    {{ __('Register') }}
                </x-responsive-nav-link>
            @endguest
            @auth
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200" x-data="{{ json_encode(['name' => auth()->user()->name]) }}"
                        x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                    <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile')" wire:navigate>
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <button wire:click="logout" class="w-full text-start">
                        <x-responsive-nav-link>
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </button>
                </div>
            @endauth
        </div>
    </div>
</nav>
