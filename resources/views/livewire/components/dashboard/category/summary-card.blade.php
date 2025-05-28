<div
    class="w-[300px] gap-4 p-4 flex flex-col justify-start bg-white/70 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 shadow-md">
    <div class="w-full flex justify-between items-center">
        <div class="w-10 h-10 p-2 rounded-lg bg-gray-100 dark:bg-gray-700 flex justify-center items-center">
            <svg class="w-6 h-6 text-gray-700 dark:text-neutral-100" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                    d="M9 8h10M9 12h10M9 16h10M4.99 8H5m-.02 4h.01m0 4H5" />
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
                <x-dropdown-link :href="route('admin.categories.manage')">
                    View More
                </x-dropdown-link>
            </x-slot>
        </x-dropdown>
    </div>

    <div class="w-full flex justify-between items-center mt-2">
        <div class="gap-1 flex flex-col">
            <p class="text-sm text-blue-700 dark:text-blue-400">Total Categories</p>
            <h1 class="text-2xl font-semibold text-blue-700 dark:text-blue-400">{{ $totalCategories }}</h1>
        </div>
    </div>

    <hr class="w-full my-2 border-gray-300 dark:border-gray-600">

    <div class="w-full flex flex-col gap-1 text-sm">
        <div class="flex justify-between">
            <p class="text-gray-600 dark:text-gray-400">Active</p>
            <p class="text-gray-900 dark:text-neutral-100">{{ $totalActive }}</p>
        </div>
        <div class="flex justify-between">
            <p class="text-gray-600 dark:text-gray-400">Trashed</p>
            <p class="text-gray-900 dark:text-neutral-100">{{ $totalTrashCategories }}</p>
        </div>
    </div>
</div>
