<x-app-layout>
    <section class="w-full h-screen flex flex-col justify-center items-center">
        <h1 class="block font-normal text-gray-800 text-2xl md:text-3xl lg:text-4xl dark:text-neutral-200">
            Welcome to your Homepage User:
            {{ Auth::user()->firstname . ' ' . Auth::user()->middlename . ' ' . Auth::user()->lastname }}
        </h1>
    </section>
</x-app-layout>
