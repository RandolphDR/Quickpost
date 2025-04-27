<x-guest-layout>
    <aside class="w-1/2 px-16">
        <main class="w-full flex flex-col justify-center items-center">
            <x-application-logo class="w-full" />
        </main>
    </aside>
    <section class="w-1/2 px-16 h-screen">
        <main class="w-full h-full gap-16 flex flex-col justify-center items-center">
            <nav class="w-full">
                <a href="{{ route('homepage') }}" class="py-2 px-2 inline-flex justify-center items-center gap-x-2 rounded-2xl border border-transparent bg-blue-600 text-sm font-medium text-white hover:bg-blue-800 active:bg-blue-600 focus:bg-blue-700 focus:outline-none active:ring-2 active:ring-indigo-500 active:ring-offset-2 dark:focus:ring-offset-gray-800 tracking-widest transition ease-in-out duration-150" wire:navigate>
                    <svg class="w-6 h-6" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12l4-4m-4 4 4 4" />
                    </svg>
                    Go Back
                </a>
            </nav>
            <header class="gap-2 py-4 font-outfit-sans flex flex-col justify-center items-center">
                <h3 class="text-black dark:text-neutral-100 text-5xl font-bold">Log In to your Account</h3>
            </header>
            <livewire:pages.auth.login />
            <footer class="w-full flex flex-col justify-center items-center">
                <p class="mt-4 text-sm leading-relaxed text-gray-800 dark:text-neutral-200">
                    Not registered yet?
                    <a href="{{ route('register') }}" class="font-bold text-gray-800 dark:text-neutral-200"
                        wire:navigate>
                        Create an Account
                    </a>
                </p>
            </footer>
        </main>
    </section>
</x-guest-layout>
