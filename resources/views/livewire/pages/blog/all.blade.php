<div class="w-full h-full flex flex-col">
    <header class="w-full p-4">
        <h1 class="font-semibold text-xl lg:text-2xl text-gray-800 dark:text-neutral-200">
            All Blog Posts
        </h1>
    </header>

    <main class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2">
        @foreach ($allPosts as $post)
            <livewire:components.blog.blogpost-card :postId="$post->id" lazy wire:key="post-{{ $post->id }}"
                class="w-full h-full p-1 lg:p-2" />
        @endforeach
    </main>

    <nav class="mt-8 w-full">
        {{ $allPosts->links('vendor.livewire.tailwind') }}
    </nav>
</div>
