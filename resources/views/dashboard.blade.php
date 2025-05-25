<x-dashboard-layout>
    <div class="w-full h-[200vh] flex flex-col justify-start items-center border">
        <h1 class="text-black dark:text-white/90 text-4xl font-medium">
            This Dashboard is Under Development.
        </h1>
        <h1 class="text-black dark:text-white/90 text-4xl font-medium">Hi {{ auth()->user()->firstname }}
            {{ auth()->user()->name . ' Your Role is: ' . auth()->user()->role }}</h1>
    </div>
</x-dashboard-layout>
