<div class="w-full h-full gap-2 flex flex-col justify-start items-start">
    <header class="w-full p-2 flex flex-col justify-center items-start">
        <h1 class="font-semibold text-3xl text-gray-800 dark:text-neutral-200 text-center">
            Popular Blogs
        </h1>
    </header>
    <main class="w-full overflow-x-auto py-2 flex flex-row justify-start items-center gap-4 scrollbar-custom">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $popularPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article
                class="p-2 w-[400px] h-[500px] flex-shrink-0 gap-2 flex flex-col justify-center items-center rounded-lg">
                <figure class="w-full h-[50%] bg-slate-600 rounded-lg">
                </figure>
                <div class="w-full h-[50%] gap-2 flex flex-col justify-start items-start">
                    <header class="w-full gap-2 flex justify-start items-center">
                        <span class="flex justify-center items-center gap-2">
                            <img src="<?php echo e(asset('storage/avatar/1744116544_myprofile.png')); ?>" alt="error"
                                class="rounded-full w-7 h-7 bg-gray-400">
                            <p class="text-gray-600 dark:text-gray-400 text-sm"><?php echo e($post->user->firstname); ?> <?php echo e($post->user->lastname); ?></p>
                        </span>
                        <p class="text-indigo-600 text-3xl">•</p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm"><?php echo e($post->created_at->format('d F Y')); ?></p>
                    </header>
                    <main class="w-full gap-2 flex flex-col justify-start items-start">
                        <h1 class="text-xl font-semibold text-black dark:text-neutral-200"><?php echo e($post->title); ?></h1>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            <?php echo e(Str::limit($post->short_description, 100)); ?>

                        </p>
                    </main>
                    <footer class="w-full h-fit py-2">
                        <a href=""
                            class="py-1 px-2 inline-flex justify-center items-center rounded-lg border border-transparent bg-blue-600 text-sm text-white hover:bg-blue-800 active:bg-blue-600 focus:bg-blue-700 focus:outline-none active:ring-2 active:ring-indigo-500 active:ring-offset-2 dark:focus:ring-offset-gray-800 tracking-wider transition ease-in-out duration-150"
                            wire:navigate>
                            Read Post
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                            </svg>
                        </a>
                    </footer>
                </div>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </main>
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/pages/blog/popular.blade.php ENDPATH**/ ?>