<div class="w-full h-full flex flex-col">
    <header class="w-full p-4 flex justify-between items-center">
        <h1 class="font-semibold text-xl lg:text-2xl text-gray-800 dark:text-neutral-200">
            {{ $username ? "{$username}'s Blog Posts" : 'All Blog Posts' }}
        </h1>
        <p class="text-sm text-gray-600 dark:text-neutral-400">
            <span wire:loading.flex>
                <svg class="animate-spin h-5 w-5 text-indigo-600 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4">
                    </circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                Loading Page...
            </span>
            <span wire:loading.remove>
                Viewing Page {{ $allPosts->currentPage() }} of {{ $allPosts->lastPage() }}
            </span>
        </p>
    </header>

    <main class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2">
        <div wire:loading.flex class="col-span-full gap-2 flex flex-col items-center justify-center">
            <svg class="animate-spin h-8 w-8 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                </circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
            <p class="text-gray-600 dark:text-neutral-400">
                Please wait while we load the posts...
            </p>
        </div>

        <div wire:loading.remove class="contents">
            @foreach ($allPosts as $post)
                <livewire:components.blog.blogpost-card :postId="$post->id" wire:key="post-{{ $post->id }}"
                    class="w-full h-full p-1 lg:p-2" />
            @endforeach
        </div>
    </main>

    <nav class="mt-8 w-full" wire:loading.remove>
        {{ $allPosts->links('vendor.livewire.tailwind') }}
    </nav>
</div>
