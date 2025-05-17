<div class="p-3 flex justify-between items-center">
    <aside class="px-3 py-1">
        <h1 class="text-xl  text-gray-800 dark:text-neutral-200 font-medium"><?php echo e($post->title); ?></h1>
    </aside>
    <nav class="gap-2 flex justify-center items-center">
        <button onclick="event.preventDefault(); window.history.back();"
            class="group border border-gray-300 dark:border-gray-600 rounded-lg py-1 px-2 gap-1 inline-flex items-center text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 text-sm font-medium transition-colors duration-150">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 12h14M5 12l4-4m-4 4 4 4" />
            </svg>
            Exit
        </button>
        <button onclick="event.preventDefault(); window.history.back();"
            class="group border border-gray-300 dark:border-gray-600 rounded-lg py-1 px-2 gap-1 inline-flex items-center text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 text-sm font-medium transition-colors duration-150">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 11.917 9.724 16.5 19 7.5" />
            </svg>

            Save as draft
        </button>
        <button class="group bg-blue-600 hover:bg-blue-700 text-white rounded-lg py-1 px-2 gap-1 inline-flex items-center text-sm font-medium transition-colors duration-150">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m10.051 8.102-3.778.322-1.994 1.994a.94.94 0 0 0 .533 1.6l2.698.316m8.39 1.617-.322 3.78-1.994 1.994a.94.94 0 0 1-1.595-.533l-.4-2.652m8.166-11.174a1.366 1.366 0 0 0-1.12-1.12c-1.616-.279-4.906-.623-6.38.853-1.671 1.672-5.211 8.015-6.31 10.023a.932.932 0 0 0 .162 1.111l.828.835.833.832a.932.932 0 0 0 1.111.163c2.008-1.102 8.35-4.642 10.021-6.312 1.475-1.478 1.133-4.77.855-6.385Zm-2.961 3.722a1.88 1.88 0 1 1-3.76 0 1.88 1.88 0 0 1 3.76 0Z" />
            </svg>
            Publish Post
        </button>
    </nav>
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/components/blog/manage/header.blade.php ENDPATH**/ ?>