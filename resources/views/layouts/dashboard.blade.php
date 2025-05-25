<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Tab Settings --}}
    <title>Dashboard | @yield('title', config('app.name'))</title>
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

<body class="bg-gray-100 dark:bg-gray-900 font-outfit-sans antialiased w-full flex justify-center items-stretch">
    {{-- Aside Navigationbar --}}
    <aside class="min-w-[300px] w-[25%]">
        <livewire:components.dashboard.navigation />
    </aside>
    {{-- End of Aside Navigationbar --}}

    {{-- Main Content --}}
    <main class="w-full h-screen">
        <header class="">
            <livewire:components.dashboard.header />
        </header>
        <section class="p-4">
            {{ $slot }}
        </section>
    </main>
    {{-- End of Main Content --}}

    <!-- Scripts -->
    <script src="{{ asset('js/layouts/app.js') }}"></script>
    @stack('scripts')
    {{-- End of Scripts --}}
</body>

</html>
