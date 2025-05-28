<main class="w-full h-full flex flex-col">
    @if (Auth::check() && $username === Auth::user()->username)
        <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
            <nav class="flex space-x-4">
                <x-nav-link class="cursor-pointer" wire:click="setStatus('published')" :active="$status === 'published'">
                    Published
                </x-nav-link>
                <x-nav-link class="cursor-pointer" wire:click="setStatus('draft')" :active="$status === 'draft'">
                    Drafts
                </x-nav-link>
                <x-nav-link class="cursor-pointer" wire:click="setStatus('trashed')" :active="$status === 'trashed'">
                    Trashed
                </x-nav-link>
            </nav>
        </div>
    @endif

    <header class="w-full p-4 flex justify-between items-center">
        <h1 class="font-semibold text-xl lg:text-2xl text-gray-800 dark:text-neutral-200">
            {{ $username ? "{$username}'s Blog Posts" : 'All Blog Posts' }}
        </h1>
        <p class="text-sm text-gray-600 dark:text-neutral-400">
            <span wire:loading.flex>
                <svg class="animate-spin h-5 w-5 text-indigo-600 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4" />
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0
                             3.042 1.135 5.824 3 7.938l3-2.647z" />
                </svg>
                Loading Page...
            </span>
            <span wire:loading.remove>
                Viewing Page {{ $allPosts->currentPage() }} of {{ $allPosts->lastPage() }}
            </span>
        </p>
    </header>

    <section class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2">
        <div wire:loading.flex class="col-span-full flex flex-col items-center justify-center py-4">
            <div class="flex gap-2 mb-2">
                <div class="w-3 h-3 rounded-full bg-blue-600 animate-bounce [animation-delay:.1s]"></div>
                <div class="w-3 h-3 rounded-full bg-blue-600 animate-bounce [animation-delay:.3s]"></div>
                <div class="w-3 h-3 rounded-full bg-blue-600 animate-bounce [animation-delay:.5s]"></div>
            </div>
            <p class="text-gray-600 dark:text-neutral-400">Please wait while we load the posts...</p>
        </div>

        <div wire:loading.remove class="contents">
            @foreach ($allPosts as $post)
                <livewire:components.blog.blogpost-card :postId="$post->id" wire:key="post-{{ $post->id }}"
                    class="w-full h-full p-1 lg:p-2" />
            @endforeach

            @if ($allPosts->isEmpty())
                <div class="w-full col-span-full text-center py-10 text-gray-500 dark:text-neutral-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-10 w-10 mb-2 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2h6v2a2 2 0 002 2h1a2 2 0 002-2V7a2 2 0 00-2-2h-1a2 2 0 00-2 2v2H9V7a2 2 0
                                 00-2-2H6a2 2 0 00-2 2v10a2 2 0 002 2h1a2 2 0 002-2z" />
                    </svg>
                    <p class="text-lg font-medium">No posts found</p>
                    <p class="text-sm">Check back later for new updates.</p>
                </div>
            @endif
        </div>
    </section>

    <nav class="mt-8 w-full" wire:loading.remove>
        {{ $allPosts->links('vendor.livewire.tailwind') }}
    </nav>
</main>
