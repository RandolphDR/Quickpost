@section('title', 'Explore')

<x-app-layout>
    <section class="w-full h-[50vh] gap-4 flex flex-col justify-center items-center">
        <h1 class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
            Explore Blogs
        </h1>
        <p class="text-gray-500 text-xl dark:text-gray-400">
            Stay updated with the latest inisights, trends, and expert tipss in our recent blog posts. From industry
            news to practical guides.
        </p>
    </section>

    {{-- REWORK PLAN: THE LAYOUT THE PRIORITY IS THE ALL BLOG POST AND PUT THE POPULAR AND LATEST TO SIDE! --}}
    <section class="p-4 w-full max-w-7xl flex flex-col justify-start items-start">
        <livewire:pages.blog.popular />
    </section>
    <section class="p-4 w-full max-w-7xl flex flex-col justify-start items-start">
        <livewire:pages.blog.latest />
    </section>
</x-app-layout>
