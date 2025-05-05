@section('title', Auth::check() && Auth::user()->username === $username ? 'My Profile' : $username)

<x-app-layout>
    <livewire:pages.user.profile.header :username="$username" />
    <section class="w-full max-w-7xl py-2">
        <livewire:pages.user.profile.stats :username="$username" />
    </section>
</x-app-layout>
