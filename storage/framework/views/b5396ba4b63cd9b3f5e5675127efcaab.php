<div class="w-full px-4 py-4 gap-4 flex flex-col justify-start items-center">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-post', $post)): ?>
        <button class="text-gray-900 dark:text-neutral-200">Edit This Blog Article</button>
    <?php endif; ?>
    <figure class="w-full max-h-96 rounded-lg overflow-hidden flex justify-center items-center">
        <!--[if BLOCK]><![endif]--><?php if($post->cover_image): ?>
            <img src="<?php echo e(asset($post->cover_image)); ?>" alt="error" class="h-full object-cover object-center">
        <?php else: ?>
            <div class="w-full rounded-lg gap-2 flex flex-col justify-center items-center">
                <img src="<?php echo e(asset('images/no-background.png')); ?>" alt="error" class="w-1/3">
                <h1 class="text-black dark:text-neutral-200 text-xl font-medium">No Cover
                    Image Found
                </h1>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </figure>

    <!-- Header Section -->
    <header class="w-full gap-4 flex flex-col justify-center items-start">
        <div class="w-full gap-2 flex justify-start items-center">
            <span class="flex justify-center items-center gap-2">
                <img src="<?php echo e(asset($post->user->avatar)); ?>" alt="error" class="rounded-full w-7 h-7 bg-gray-400">
                <p class="text-gray-600 dark:text-gray-400 text-sm">
                    <?php echo e($post->user->fullname); ?>

                </p>
            </span>
            <p class="text-indigo-600 text-3xl">•</p>
            <p class="text-gray-600 dark:text-gray-400 text-sm">
                <?php echo e($post->created_at->format('d F Y')); ?>

            </p>
        </div>
        <h1 class="text-4xl font-semibold text-gray-900 dark:text-neutral-100"><?php echo e($post->title); ?></h1>
    </header>

    <!-- Main Content -->
    <article class="w-full">
        <p class="text-gray-900 dark:text-neutral-200"><?php echo e($post->body); ?></p>
    </article>

    <hr class="w-full my-2 border-gray-700 dark:border-neutral-200">
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/pages/blog/view-post.blade.php ENDPATH**/ ?>