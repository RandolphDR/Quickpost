<x-guest-layout>
    <aside class="w-1/2 h-screen p-16">
        <main class="w-full h-full flex flex-col justify-center items-center">
            <a href="{{ route('homepage') }}" class="absolute top-16" wire:navigate>
                <x-application-logo />
            </a>
            <p class="text-sm font-medium text-gray-600 dark:text-[#7592ff]">
                LARAVEL LIVEWIRE ⨯ TAILWIND CSS
            </p>
            <div class="mt-5 max-w-2xl text-center">
                <h1 class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
                    Post Instantly. Connect Effortlessly.
                </h1>
            </div>
            <div class="mt-10 max-w-3xl text-center">
                <p class="text-lg text-gray-600 dark:text-neutral-400">
                    Turn your ideas into live posts in seconds. QuickPost makes sharing your thoughts simple, fast, and
                    powerful — anytime inspiration strikes.
                </p>
            </div>
            <div class="mt-8 gap-3 flex justify-center">
                <a href="{{ route('login') }}"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    wire:navigate>
                    Create Your Blog
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
        </main>
    </aside>
    <section class="w-1/2 p-16 h-screen">
        <main class="w-full h-full p-8 gap-8 flex flex-col justify-between items-center bg-neutral-100 dark:bg-gray-800 rounded-2xl">
            <nav class="w-full">
                <a href="{{ route('homepage') }}"
                    class="py-1 px-2 inline-flex justify-center items-center rounded-2xl border border-transparent bg-blue-600 text-xs font-medium text-white hover:bg-blue-800 active:bg-blue-600 focus:bg-blue-700 focus:outline-none active:ring-2 active:ring-indigo-500 active:ring-offset-2 dark:focus:ring-offset-gray-800 tracking-widest transition ease-in-out duration-150"
                    wire:navigate>
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12l4-4m-4 4 4 4" />
                    </svg>
                    Go Back
                </a>
            </nav>
            <header class="gap-2 py-4 font-outfit-sans flex flex-col justify-center items-center">
                <h3 class="text-black dark:text-neutral-200 text-5xl font-medium">Log In to your Account</h3>
            </header>
            <livewire:pages.auth.login />
            <footer class="w-full flex flex-col justify-center items-center">
                <p class="mt-4 text-sm leading-relaxed text-gray-800 dark:text-neutral-200">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="font-bold text-gray-800 dark:text-neutral-200"
                        wire:navigate>
                        Sign Up
                    </a>
                </p>
            </footer>
        </main>
    </section>
</x-guest-layout>
