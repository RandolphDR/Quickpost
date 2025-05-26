<div class="w-full gap-5 flex justify-start items-center">
    <div
        class="w-[280px] gap-4 p-4 flex flex-col justify-center items-center bg-white/70 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
        <div class="w-full flex justify-between items-center">
            <div class="w-9 h-9 p-1 rounded-lg bg-gray-100 dark:bg-gray-700 flex justify-center items-center">
                <svg class="w-6 h-6 text-gray-700 dark:text-neutral-100" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z" />
                </svg>
            </div>
        </div>
        <div class="w-full flex justify-between items-center">
            <span>
                <p class="text-gray-800 dark:text-neutral-200">Total Blogs</p>
                <h1 class="text-gray-900 dark:text-neutral-100 text-2xl font-semibold"><?php echo e($totalBlogs); ?></h1>
            </span>
        </div>
    </div>
    <div
        class="w-[280px] gap-4 p-4 flex flex-col justify-center items-center bg-white/70 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
        <div class="w-full flex justify-between items-center">
            <div class="w-9 h-9 p-1 rounded-lg bg-gray-100 dark:bg-gray-700 flex justify-center items-center">
                <svg class="w-6 h-6 text-gray-700 dark:text-neutral-100" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 3v4a1 1 0 0 1-1 1H5m4 6 2 2 4-4m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                </svg>
            </div>
        </div>
        <div class="w-full flex justify-between items-center">
            <span>
                <p class="text-gray-800 dark:text-neutral-200">Published Blogs</p>
                <h1 class="text-gray-900 dark:text-neutral-100 text-2xl font-semibold"><?php echo e($totalPublished); ?></h1>
            </span>
        </div>
    </div>
    <div
        class="w-[280px] gap-4 p-4 flex flex-col justify-center items-center bg-white/70 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
        <div class="w-full flex justify-between items-center">
            <div class="w-9 h-9 p-1 rounded-lg bg-gray-100 dark:bg-gray-700 flex justify-center items-center">
                <svg class="w-6 h-6 text-gray-700 dark:text-neutral-100" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                </svg>
            </div>
        </div>
        <div class="w-full flex justify-between items-center">
            <span>
                <p class="text-gray-800 dark:text-neutral-200">Draft Blogs</p>
                <h1 class="text-gray-900 dark:text-neutral-100 text-2xl font-semibold"><?php echo e($totalDrafts); ?></h1>
            </span>
        </div>
    </div>
    <div
        class="w-[280px] gap-4 p-4 flex flex-col justify-center items-center bg-white/70 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
        <div class="w-full flex justify-between items-center">
            <div class="w-9 h-9 p-1 rounded-lg bg-gray-100 dark:bg-gray-700 flex justify-center items-center">
                <svg class="w-6 h-6 text-gray-700 dark:text-neutral-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 9h6m-6 3h6m-6 3h6M6.996 9h.01m-.01 3h.01m-.01 3h.01M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />
                </svg>
            </div>
        </div>
        <div class="w-full flex justify-between items-center">
            <span>
                <p class="text-gray-800 dark:text-neutral-200">Total Category</p>
                <h1 class="text-gray-900 dark:text-neutral-100 text-2xl font-semibold"><?php echo e($totalCategories); ?></h1>
            </span>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/components/blog/dashboard/summary.blade.php ENDPATH**/ ?>