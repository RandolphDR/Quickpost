<div class="gap-2 flex flex-col py-2">
    <p class="text-gray-600 dark:text-gray-400">{{ $dateToday }}</p>
    <h1 class="text-4xl text-gray-800 dark:text-neutral-200">
        Good Morning, <strong>{{ Auth::user()->firstname }}!</strong>
    </h1>
</div>
