@section('title', Auth::check() && Auth::user()->username === $username ? 'My Profile' : $username)

<x-app-layout>
    <header class="w-full max-w-7xl bg-white dark:bg-gray-800 shadow-md rounded-xl">
        <livewire:pages.user.profile.header :username="$username" />
    </header>

    <main class="w-full max-w-7xl flex flex-col lg:flex-row gap-4 mt-2">
        <aside class="lg:w-1/3 w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <livewire:pages.user.profile.stats :username="$username" />
        </aside>
        <section class="lg:w-3/4 w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg overflow-hidden">
            <livewire:pages.user.profile.body :username="$username" />
        </section>
    </main>
</x-app-layout>
