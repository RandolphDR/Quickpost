@section('title', 'My Profile')

<x-app-layout>
    <livewire:pages.user.profile.header :username="$username" />
    <section class="w-full max-w-7xl">
        <livewire:pages.user.profile.stats :username="$username" />
    </section>
</x-app-layout>
