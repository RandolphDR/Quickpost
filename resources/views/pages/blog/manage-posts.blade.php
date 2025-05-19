@section('title', 'Manage Posts')

<x-app-layout>
    <main class="w-full max-w-7xl gap-2 flex flex-col justify-start items-center">
        <header
            class="w-full py-4 px-6 flex justify-between items-center bg-white dark:bg-gray-800 shadow-md rounded-xl">
            <aside class="">
                <h1 class="text-xl  text-gray-800 dark:text-neutral-200 font-medium">
                    {{ Gate::allows('administrator-access') ? 'Manage all blogs' : 'Manage your blogs' }}</h1>
            </aside>
            <nav class="">
                <x-btn-nav-link class="py-2">
                    Create New Blog
                </x-btn-nav-link>
            </nav>
        </header>
        <section class="w-full p-4 bg-white dark:bg-gray-800 shadow-md rounded-xl">
            <livewire:components.blog.manage.all />
        </section>
    </main>
</x-app-layout>
