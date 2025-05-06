<div class="@container w-full h-full gap-2 flex flex-col justify-start items-start">
    <header class="w-full p-2 flex flex-col justify-center items-start">
        <h1 class="font-semibold text-xl @lg:text-2xl text-gray-800 dark:text-neutral-200 text-center">
            Popular Blogs
        </h1>
    </header>

    <main
        class="w-full overflow-y-auto @lg:overflow-x-auto py-2 flex flex-col @lg:flex-row justify-start items-center gap-4 scrollbar-custom">
        @if ($popularPosts->isNotEmpty())
            @foreach ($popularPosts as $post)
                <livewire:components.blog.blogpost-card :postId="$post->id" lazy wire:key="post-{{ $post->id }}" />
            @endforeach
        @else
            <div class="w-full p-6 bg-gray-100 dark:bg-zinc-800 rounded-2xl shadow text-center">
                <p class="text-gray-500 dark:text-neutral-200 text-base">
                    No popular blogs available at the moment.
                </p>
            </div>
        @endif
    </main>
</div>
