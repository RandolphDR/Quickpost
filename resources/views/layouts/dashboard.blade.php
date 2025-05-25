<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Tab Settings --}}
    <title>{{ config('app.name') }} | Dashboard</title>
    <link rel="icon" href="{{ asset('website-logo.svg') }}" type="image/x-icon">
    {{-- End of Tab Settings --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    {{-- End of Fonts --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Theme Checker --}}
    <script>
        if (localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    {{-- End of Theme Checker --}}
</head>

<body class="bg-white dark:bg-gray-900 font-outfit-sans antialiased w-full flex justify-center items-stretch">
    <aside class="py-3 px-6 min-w-[300px] w-[25%] border border-gray-300">
        <livewire:components.dashboard.navigation />
    </aside>
    <main class="py-3 px-6 w-full h-screen border border-gray-300">

    </main>

    {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex">
        <aside class="min-h-screen w-[20%] bg-white dark:bg-gray-900">
            <livewire:components.dashboard.navigation />
        </aside>
        <main class="flex-1 bg-white dark:bg-gray-900 w-full">
            <div class="w-full h-full flex flex-col">
                <livewire:components.dashboard.header />
                <section class="flex-1 border border-gray-700 flex flex-col justify-center items-center">
                    <h1 class="text-black dark:text-white/90 text-4xl font-medium">
                        This Dashboard is Under Development.
                    </h1>
                    <h1 class="text-black dark:text-white/90 text-4xl font-medium">Hi
                        {{ auth()->user()->name . ' Your Role is: ' . auth()->user()->role }}</h1>
                </section>
            </div>
        </main>
    </div> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/layouts/app.js') }}"></script>
    @stack('scripts')
    {{-- End of Scripts --}}
</body>

</html>
