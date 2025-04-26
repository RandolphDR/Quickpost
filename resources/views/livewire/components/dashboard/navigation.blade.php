<nav class="w-full h-full bg-white dark:bg-gray-900">
    <div class="h-full flex flex-col">
        <div class="w-full h-20 flex flex-col justify-center items-start p-6">
            <a href="{{ route('homepage') }}" wire:navigate>
                <x-application-logo />
            </a>
        </div>
        <div class="flex-1 p-6 gap-2.5 flex flex-col justify-start items-center">
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
            <span
                class="py-2 px-3 rounded-lg w-full flex flex-row justify-start items-center gap-2.5 transition ease-in-out hover:bg-gray-800">
                <button wire:click="logout" class="text-black dark:text-white/90 font-outfit-sans font-medium">
                    Logout
                </button>
            </span>
        </div>
    </div>
</nav>
