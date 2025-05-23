<div class="w-full px-4 py-4 gap-4 flex flex-col justify-start items-center mt-4">
    <!--[if BLOCK]><![endif]--><?php if($post->status === 'draft'): ?>
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 px-4 py-2 rounded">
            <strong>Note:</strong> This post is currently in <span class="font-semibold">Draft</span> status and not
            visible to public users.
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
            <a href="<?php echo e(route('user.profile', ['username' => $post->user->username])); ?>"
                class="flex justify-center items-center gap-2 text-gray-600 dark:text-gray-400 hover:text-blue-700 dark:hover:text-blue-500 hover:underline text-sm"
                title="View Profile" wire:navigate>
                <img src="<?php echo e(asset($post->user->avatar)); ?>" alt="error" class="rounded-full w-7 h-7 bg-gray-400">
                <span class="gap-1 flex items-center">
                    <?php echo e($post->user->fullname); ?>

                    <!--[if BLOCK]><![endif]--><?php if($post->user->is_verified): ?>
                        <span class="cursor-help" title="Verified User">
                            <svg class="w-4 h-4 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </span>
            </a>
            <p class="text-indigo-600 text-3xl">•</p>
            <div class="gap-1 flex">
                <p class="text-xs text-gray-900 dark:text-neutral-200">Created Date:</p>
                <time datetime="<?php echo e($isoTime); ?>" class="text-gray-600 dark:text-gray-400 text-xs">
                    <?php echo e($createdAt); ?>

                </time>
            </div>
            <p class="text-indigo-600 text-3xl">•</p>
            <div class="gap-1 flex">
                <p class="text-xs text-gray-900 dark:text-neutral-200">Last Updated:</p>
                <time datetime="<?php echo e($isoTime); ?>" class="text-gray-600 dark:text-gray-400 text-xs">
                    <?php echo e($updatedAt); ?>

                </time>
            </div>
            <p class="text-indigo-600 text-3xl">•</p>
            <div class="gap-1 flex">
                <p class="text-xs text-gray-900 dark:text-neutral-200">Published Date:</p>
                <time datetime="<?php echo e($isoTime); ?>" class="text-gray-600 dark:text-gray-400 text-xs">
                    <?php echo e($publishedAt); ?>

                </time>
            </div>
        </div>
        <h1 class="text-4xl font-semibold text-gray-900 dark:text-neutral-100"><?php echo e($post->title); ?></h1>
    </header>

    <!-- Main Content -->
    <article class="w-full">
        <p class="text-gray-900 dark:text-neutral-200 whitespace-pre-line"><?php echo e($post->body); ?></p>
    </article>

    <hr class="w-full my-2 border-gray-700 dark:border-neutral-200">
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/pages/blog/view-post.blade.php ENDPATH**/ ?>