@section('title', 'All Categories')

<x-dashboard-layout>
    <header class="w-full flex justify-between items-center py-2">
        <aside class="">
            <h1 class="text-xl  text-gray-800 dark:text-neutral-200 font-medium">
                Manage All Categories
            </h1>
        </aside>
        <nav class="">
            <x-btn-nav-link :href="route('admin.category.create')" class="py-2">
                + Add New Category
            </x-btn-nav-link>
        </nav>
    </header>
    <livewire:components.dashboard.category.all />
</x-dashboard-layout>
