<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Tab Settings --}}
    <title>
        @hasSection('title')
            @yield('title') | {{ config('app.name') }}
        @else
            {{ config('app.name') }}
        @endif
    </title>
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
    {{-- Notification --}}
    <livewire:components.ui.notification />
    {{-- End of Notification --}}

    {{-- Aside Navigationbar --}}
    <aside class="fixed top-0 left-0 h-screen w-[20%] min-w-[300px]">
        <livewire:components.dashboard.navigation />
    </aside>
    {{-- End of Aside Navigationbar --}}

    {{-- Main Content --}}
    <main class="ml-[20%] w-full min-h-screen">
        {{-- Content Header --}}
        <header class="fixed top-0 left-[20%] right-0 h-20 z-10">
            <livewire:components.dashboard.header />
        </header>
        {{-- End of Content Header --}}

        {{-- Content Slot --}}
        <section class="mt-[5.16rem] pt-5 px-5 flex flex-col justify-start items-center gap-4">
            {{ $slot }}
        </section>
        {{-- End of Content Slot --}}

        {{-- Footer --}}
        <footer>
            <livewire:components.dashboard.footer />
        </footer>
        {{-- End of Footer --}}
    </main>
    {{-- End of Main Content --}}

    <!-- Scripts -->
    <script src="{{ asset('js/layouts/app.js') }}"></script>
    @stack('scripts')
    {{-- End of Scripts --}}
</body>

</html>
