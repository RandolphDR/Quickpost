<x-guest-layout>
    <section class="w-full h-screen p-16 flex flex-col justify-center items-center">
        <main class="px-16 py-4 gap-4 flex flex-col justify-center items-center bg-neutral-100 dark:bg-gray-800 rounded-2xl">
            <nav class="self-start">
                <a href="{{ route('homepage') }}" wire:navigate>
                    <x-application-logo class="" />
                </a>
            </nav>
            <header class="pb-4 text-center">
                <h3 class="text-black dark:text-neutral-200 text-4xl font-bold">Create your Account</h3>
                <p class="text-gray-500 dark:text-neutral-400">This is where your posting journey begins.</p>
            </header>
            <livewire:pages.auth.register />
            <footer class="">
                <p class="text-center text-sm text-gray-600 dark:text-neutral-400">
                    Already have an account?
                    <a href="{{ route('login') }}" class="font-semibold hover:underline dark:text-neutral-200"
                        wire:navigate>
                        Log In
                    </a>
                </p>
            </footer>
        </main>
    </section>
</x-guest-layout>
