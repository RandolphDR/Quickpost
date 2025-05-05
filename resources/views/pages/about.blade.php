@section('title', 'About Us')

<x-app-layout>
    <section class="w-full flex flex-col justify-start items-center p-12 gap-6">
        <header class="w-full flex flex-col justify-center items-center text-center p-12 gap-6">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-gray-800 dark:text-neutral-200">
                About QuickPost
            </h1>
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-3xl">
                QuickPost is your go-to platform for sharing ideas, stories, and expert insights. We empower creators
                and
                readers alike with a simple, modern, and efficient blogging experience.
            </p>
        </header>
        <section class="w-2/3">
            <img id="About-Banner" src="{{ asset('images/global/Dark-Banner.svg') }}"
                data-light-src="{{ asset('images/global/Light-Banner.svg') }}"
                data-dark-src="{{ asset('images/global/Dark-Banner.svg') }}" alt="About Banner"
                class="w-full drop-shadow-2xl" />
        </section>
    </section>
    <section class="w-full px-6 py-12 flex items-center text-center bg-white dark:bg-neutral-900">
        <main>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-neutral-100 mb-4">Purpose</h2>
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 max-w-3xl leading-relaxed">
                <strong>QuickPost</strong> is a Laravel + Livewire blog system built as a final project for App Dev.
                It includes admin tools to manage posts, categories, comments, cover images, and post visibility
                (draft/published),
                with real-time features and pagination support.
            </p>
        </main>
        <aside>

        </aside>
    </section>

</x-app-layout>
