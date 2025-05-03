<div class="@container w-full h-full gap-2 flex flex-col justify-start items-start">
    <header class="w-full p-2 flex flex-col justify-center items-start">
        <h1 class="font-semibold text-xl @lg:text-2xl text-gray-800 dark:text-neutral-200 text-center">
            Latest Blogs
        </h1>
    </header>

    <main
        class="w-full overflow-y-auto @lg:overflow-x-auto py-2 flex flex-col @lg:flex-row justify-start items-center gap-4 scrollbar-custom">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $latestPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article
                class="p-2 flex-shrink-0 flex @lg:w-[400px] @lg:h-[500px] w-full h-auto gap-2 flex-col justify-start items-start rounded-lg bg-white dark:bg-zinc-800">
                <div class="p-2 flex flex-col @sm:flex-row @lg:flex-col w-full h-full gap-2">
                    <figure class="w-full @sm:w-1/2 @lg:w-full @sm:h-auto @lg:h-[50%] h-48 bg-slate-600 rounded-lg">
                        <!--[if BLOCK]><![endif]--><?php if($post->cover_image): ?>
                            <img src="<?php echo e(asset($post->cover_image)); ?>" alt="error"
                                class="w-full h-full object-cover object-center rounded-lg">
                        <?php else: ?>
                            <div class="w-full h-full rounded-lg gap-2 flex flex-col justify-center items-center">
                                <img src="<?php echo e(asset('images/no-background.png')); ?>" alt="error" class="w-1/3">
                                <h1 class="text-black dark:text-neutral-200 text-sm @lg:text-xl font-medium">No Cover
                                    Image Found
                                </h1>
                            </div>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </figure>
                    <div
                        class="w-full @sm:w-1/2 @lg:w-full flex flex-col justify-between @lg:justify-start gap-2 @lg:h-[50%]">
                        <header class="w-full gap-2 hidden @lg:flex justify-start items-center">
                            <span class="flex justify-center items-center gap-2">
                                <img src="<?php echo e(asset($post->user->avatar)); ?>" alt="error"
                                    class="rounded-full w-7 h-7 bg-gray-400">
                                <p class="text-gray-600 dark:text-gray-400 text-sm">
                                    <?php echo e($post->user->fullname); ?>

                                </p>
                            </span>
                            <p class="text-indigo-600 text-3xl">•</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                <?php echo e($post->created_at->format('d F Y')); ?>

                            </p>
                        </header>

                        <main class="w-full flex flex-col justify-start items-start gap-1">
                            <h1 class="text-base @lg:text-xl font-semibold text-black dark:text-neutral-200">
                                <?php echo e($post->title); ?>

                            </h1>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                <?php echo e(Str::limit($post->short_description, 100)); ?>

                            </p>
                        </main>

                        <footer class="w-full py-2">
                            <a href="<?php echo e(route('blog.view', ['slug' => $post->slug])); ?>"
                                class="py-1 px-2 inline-flex justify-center items-center rounded-lg border border-transparent bg-blue-600 text-sm text-white hover:bg-blue-800 active:bg-blue-600 focus:bg-blue-700 focus:outline-none active:ring-2 active:ring-indigo-500 active:ring-offset-2 dark:focus:ring-offset-gray-800 tracking-wider transition ease-in-out duration-150"
                                wire:navigate title="Read: <?php echo e($post->title); ?>">
                                Read Post
                                <svg class="w-6 h-6 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </footer>
                    </div>
                </div>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </main>
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/pages/blog/latest.blade.php ENDPATH**/ ?>