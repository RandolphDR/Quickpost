<div x-data="{ open: false }" class="relative">
    <form class="w-52 flex items-center">
        <label for="search" class="absolute ml-2">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                 viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"/>
            </svg>
        </label>
        <input type="text" wire:model.debounce.300ms="query" @focus="open = true" @click.away="open = false"
               id="search"
               class="h-11 w-full pl-9 rounded-lg border border-gray-200 bg-white/50 dark:bg-dark-900 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-800 dark:bg-gray-900 dark:bg-white/[0.03] dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
               placeholder="Search Quickpost"/>

        <!-- Only show results when there are search results -->
        <!--[if BLOCK]><![endif]--><?php if(count($results) > 0 && strlen($query) > 1): ?>
            <ul x-show="open" @click.away="open = false" x-transition
                class="absolute z-10 w-full bg-white border rounded shadow mt-1 dark:bg-gray-800 dark:border-gray-700">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li wire:click="selectPost('<?php echo e($result['slug']); ?>')"
                        class="p-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700">
                        <?php echo e($result['title']); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </ul>
        <?php elseif(strlen($query) > 1 && count($results) == 0): ?>
            <ul x-show="open" @click.away="open = false" x-transition
                class="absolute z-10 w-full bg-white border rounded shadow mt-1 dark:bg-gray-800 dark:border-gray-700">
                <li class="p-2 text-gray-500">No results found.</li>
            </ul>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </form>
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/components/blog/blogpost-search.blade.php ENDPATH**/ ?>