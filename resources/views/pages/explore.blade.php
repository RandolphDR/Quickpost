@section('title', 'Explore')

<x-app-layout>
    <section class="w-full h-[40vh] gap-4 flex flex-col justify-center items-center">
        <h1 class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
            Explore Blogs
        </h1>
        <p class="text-gray-500 text-xl dark:text-gray-400">
            Stay updated with the latest inisights, trends, and expert tipss in our recent blog posts. From industry
            news to practical guides.
        </p>
    </section>

    <main class="w-full flex flex-col lg:flex-row gap-8 p-6">
        <section class="lg:w-3/4 w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg overflow-hidden">
            <livewire:pages.blog.all />
        </section>

        <aside class="lg:w-1/3 w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <livewire:pages.blog.popular />
        </aside>
    </main>
</x-app-layout>
