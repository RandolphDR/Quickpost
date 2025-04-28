<x-guest-layout>
    <section class="w-full h-screen p-16 flex flex-col justify-center items-center">
        <main class="px-16 py-4 flex flex-col justify-center items-center bg-neutral-100 dark:bg-gray-800 rounded-2xl">
            <nav>
                <a href="{{ route('homepage') }}" wire:navigate>
                    <x-application-logo class="" />
                </a>
            </nav>
            <header>
            </header>
            <livewire:pages.auth.register />
        </main>
    </section>
</x-guest-layout>
