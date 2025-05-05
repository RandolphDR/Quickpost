@section('title', ucwords(str_replace('-', ' ', $slug)) )

<x-app-layout>
    <main class="w-full flex flex-col lg:flex-row gap-8 p-6">
        <section class="lg:w-3/4 w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <livewire:pages.blog.view-post :slug="$slug" />
            <livewire:pages.blog.comment-section :slug="$slug" />
            <div class="mt-8">
                <livewire:pages.blog.latest />
            </div>
        </section>

        <aside class="lg:w-1/3 w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <livewire:pages.blog.popular />
        </aside>
    </main>
</x-app-layout>
