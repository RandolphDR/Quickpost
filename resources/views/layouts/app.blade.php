<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Tab Settings --}}
    <title>{{ config('app.name') }}</title>
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

<body class="bg-white dark:bg-gray-900 font-outfit-sans antialiased w-full min-h-screen flex flex-col justify-start items-start">
    {{-- Notification --}}
    <livewire:components.ui.notification />
    {{-- End of Notification --}}

    {{-- Header --}}
    <header class="sticky top-0 z-10 w-full flex flex-col justify-start items-center">
        {{-- Navigationbar --}}
        <livewire:components.layouts.navigation />
        {{-- End of Navigationbar --}}
    </header>
    {{-- End of Header --}}

    {{-- Main Content --}}
    <main class="w-full min-h-[90vh] flex flex-col justify-start items-center gap-2 bg-gray-100 dark:bg-gray-900">
        {{ $slot }}
    </main>
    {{-- End of Main Content --}}

    {{-- Footer --}}
    @hasSection('footer')
        @yield('footer')
    @else
        <livewire:components.layouts.footer />
    @endif
    {{-- End of Footer --}}


    <!-- Scripts -->
    <script src="{{ asset('js/layouts/app.js') }}"></script>
    {{-- End of Scripts --}}
</body>

</html>
