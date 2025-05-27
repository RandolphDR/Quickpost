<div
    class="w-[300px] gap-4 p-4 flex flex-col justify-start bg-white/70 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
    <div class="w-full flex justify-between items-center">
        <div class="w-10 h-10 p-2 rounded-lg bg-gray-100 dark:bg-gray-700 flex justify-center items-center">
            <svg class="w-6 h-6 text-gray-700 dark:text-neutral-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z" />
            </svg>
        </div>
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button type="button">
                    <svg class="w-6 h-6 text-gray-900 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M12 6h.01M12 12h.01M12 18h.01" />
                    </svg>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown-link :href="route('admin.blog.manage')">
                    View More
                </x-dropdown-link>
            </x-slot>
        </x-dropdown>
    </div>

    <div class="w-full flex justify-between items-center mt-2">
        <div class="gap-1 flex flex-col">
            <p class="text-sm text-blue-700 dark:text-blue-400">Total Blogs</p>
            <h1 class="text-2xl font-semibold text-blue-700 dark:text-blue-400">{{ $totalBlogs }}</h1>
        </div>
    </div>

    <hr class="w-full my-2 border-gray-300 dark:border-gray-600">

    <div class="w-full flex flex-col gap-1 text-sm">
        <div class="flex justify-between">
            <span class="text-gray-600 dark:text-gray-400">Published</span>
            <span class="text-gray-900 dark:text-neutral-100">{{ $totalPublished }}</span>
        </div>
        <div class="flex justify-between">
            <span class="text-gray-600 dark:text-gray-400">Drafts</span>
            <span class="text-gray-900 dark:text-neutral-100">{{ $totalDrafts }}</span>
        </div>
        <div class="flex justify-between">
            <span class="text-gray-600 dark:text-gray-400">Trashed</span>
            <span class="text-gray-900 dark:text-neutral-100">{{ $totalTrashBlogs }}</span>
        </div>
    </div>
</div>
