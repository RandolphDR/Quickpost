@section('title', 'Create Blog')

<x-dashboard-layout>
    <header class="w-full py-2">
        <h1 class="text-xl  text-gray-800 dark:text-neutral-200 font-medium">
            Create New Blogpost
        </h1>
    </header>
    <livewire:components.blog.manage.create-form />
</x-dashboard-layout>
