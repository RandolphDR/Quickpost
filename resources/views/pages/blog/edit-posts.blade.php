@section('title', 'Edit Posts')

<x-app-layout>
    <main class="w-full max-w-7xl gap-2 flex flex-col justify-start items-center">
        <header class="w-full bg-white dark:bg-gray-800 shadow-md rounded-xl overflow-hidden">
            <livewire:components.blog.manage.header :slug="$slug" />
        </header>
        <section class="w-full p-4 bg-white dark:bg-gray-800 shadow-md rounded-xl">
            <livewire:components.blog.manage.edit-form :slug="$slug" />
        </section>
    </main>
</x-app-layout>
