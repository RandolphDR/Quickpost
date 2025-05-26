<x-dashboard-layout>
    <header class="w-full flex justify-between items-center">
        <aside class="">
            <h1 class="text-xl  text-gray-800 dark:text-neutral-200 font-medium">
                Manage all blogs
            </h1>
        </aside>
        <nav class="">
            <x-btn-nav-link :href="route('admin.blog.create')" class="py-2">
                + Create New Blog
            </x-btn-nav-link>
        </nav>
    </header>
    <livewire:components.blog.manage.all />
</x-dashboard-layout>
