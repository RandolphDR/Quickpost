@section('title', 'Create Post')

@push('scripts')
    <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.min.js"></script>
@endpush

<x-app-layout>
    <main class="w-full max-w-7xl gap-2 flex flex-col justify-start items-center">
        <header class="w-full bg-white dark:bg-gray-800 shadow-md rounded-xl overflow-hidden">
            <livewire:components.blog.manage.header />
        </header>
        <section class="w-full p-4 bg-white dark:bg-gray-800 shadow-md rounded-xl">
            <livewire:components.blog.manage.create-form />
        </section>
    </main>
</x-app-layout>
