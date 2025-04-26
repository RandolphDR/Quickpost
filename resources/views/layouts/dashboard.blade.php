<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | Dashboard</title>
    <link rel="icon" href="{{ asset('website-logo.svg') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-outfit-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex">
        <aside class="min-h-screen w-[20%] bg-white dark:bg-gray-900">
            <livewire:components.dashboard.navigation />
        </aside>
        <main class="flex-1 bg-white dark:bg-gray-900">
            <div class="w-full h-full flex flex-col">
                <header class="w-full h-20 flex flex-row justify-between items-center">
                    <div class="w-[40%] h-full flex flex-row justify-center items-center">
                        <form class="flex-1 flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search"
                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-200 bg-transparent py-2.5 pl-12 pr-14 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-800 dark:bg-gray-900 dark:bg-white/[0.03] dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800 xl:w-[430px]"
                                    placeholder="Search or type command...">
                            </div>
                        </form>
                    </div>
                    <div class="">

                    </div>
                </header>
                <section class="flex-1 border border-gray-700 flex flex-col justify-center items-center">
                    <h1 class="text-black dark:text-white/90 text-4xl font-medium">
                        This Dashboard is Under Development.
                    </h1>
                    <h1 class="text-black dark:text-white/90 text-4xl font-medium">Hi {{ auth()->user()->name . ' Your Role is: ' . auth()->user()->role }}</h1>
                </section>
            </div>
        </main>
    </div>
</body>

</html>
