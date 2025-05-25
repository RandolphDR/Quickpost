<x-dashboard-layout>
    <div class="w-full h-full flex flex-col">
        <section class="flex-1 flex flex-col justify-center items-center">
            <h1 class="text-black dark:text-white/90 text-4xl font-medium">
                This Dashboard is Under Development.
            </h1>
            <h1 class="text-black dark:text-white/90 text-4xl font-medium">Hi {{ auth()->user()->firstname }}
                {{ auth()->user()->name . ' Your Role is: ' . auth()->user()->role }}</h1>
        </section>
    </div>
</x-dashboard-layout>
