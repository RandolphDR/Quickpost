<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Tab Settings --}}
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('website-logo.svg') }}" type="image/x-icon">
    {{-- End of Tab Settings --}}

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

<body class="w-full h-screen font-outfit-sans antialiased bg-gray-100 dark:bg-gray-900">
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
    <main class="w-full h-[80%] max-w-7xl justify-self-center flex flex-col justify-center items-center gap-8">
        <figure class="w-[450px] h-[290px] overflow-hidden flex flex-col justify-center items-center">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.js"></script>
            <dotlottie-player src="{{ asset(View::yieldContent('banner-path')) }}" background="transparent"
                speed="1.5" style="@yield('banner-style')" loop autoplay>
            </dotlottie-player>
        </figure>
        <article class="w-full flex flex-col justify-center items-center text-center">
            <header class="py-4">
                <h5 class="text-5xl text-gray-800 dark:text-white/90 font-semibold">
                    @yield('header')
                </h5>
            </header>
            <p class="text-xl text-gray-400 dark:text-gray-500">
                @yield('message')
            </p>
        </article>
    </main>
    {{-- End of Main Content --}}

    {{-- Footer --}}
    @if (!isset($footer))
        <livewire:components.layouts.footer />
    @endif
    {{-- End of Footer --}}

    <!-- Scripts -->
    <script src="{{ asset('js/layouts/app.js') }}"></script>
    {{-- End of Scripts --}}
</body>

</html>
