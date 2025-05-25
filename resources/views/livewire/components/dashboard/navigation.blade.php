<nav class="gap-4 flex flex-col">
    <header class="w-full h-20 flex flex-col justify-center">
        <a href="{{ route('homepage') }}" wire:navigate>
            <x-application-logo />
        </a>
    </header>
    <main class="w-full gap-2 flex flex-col items-center">
        <x-dashboard-nav-link :href="route('homepage')" :active="request()->routeIs('homepage')">
            Home
        </x-dashboard-nav-link>

        <x-dashboard-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
            Dashboard
        </x-dashboard-nav-link>

        <span
            class="py-2 px-3 rounded-lg w-full flex flex-row justify-start items-center gap-2.5 transition ease-in-out hover:bg-gray-800">
            <button wire:click="logout" class="text-black dark:text-white/90 font-outfit-sans font-medium">
                Logout
            </button>
        </span>
    </main>
    {{-- <div class="flex-1 gap-2.5 flex flex-col justify-start items-center">
        <span
            class="py-2 px-3 rounded-lg w-full flex flex-row justify-start items-center gap-2.5 transition ease-in-out hover:bg-gray-800">
            <a href="{{ route('homepage') }}" class="text-black dark:text-white/90 font-outfit-sans font-medium">
                Home
            </a>
        </span>
        <span class="py-2 px-3 bg-blue-950 rounded-lg w-full flex flex-row justify-start items-center gap-2.5">
            <a href="{{ route('admin.dashboard') }}" class="text-black dark:text-[#7592ff] font-outfit-sans font-medium">
                Dashboard
            </a>
        </span>

    </div> --}}
</nav>
