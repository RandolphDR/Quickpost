@section('title', 'Edit Posts')

<x-app-layout>
    <main class="w-full max-w-7xl flex flex-col justify-start items-center">
        <livewire:components.blog.manage.edit-form :slug="$slug" />
    </main>
</x-app-layout>
