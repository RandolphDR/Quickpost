<div class="max-w-4xl mx-auto px-4 py-8">
    <!-- Header Section -->
    <header class="mb-8 text-center">
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-neutral-100"><?php echo e($post->title); ?></h1>
        <p class="mt-2 text-lg text-gray-600 dark:text-gray-400">By <?php echo e($post->user->fullname); ?> |
            <?php echo e($post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('F d, Y') : 'Unpublished'); ?></p>
    </header>

    <!-- Cover Image -->
    <!--[if BLOCK]><![endif]--><?php if($post->cover_image): ?>
        <figure class="mb-8">
            <img src="<?php echo e(asset($post->cover_image)); ?>" alt="Cover Image" class="w-full h-auto rounded-lg shadow-lg">
        </figure>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!-- Short Description -->
    <section class="mb-8">
        <p class="text-lg text-gray-700 dark:text-gray-300"><?php echo e($post->short_description); ?></p>
    </section>

    <!-- Main Content -->
    <article class="mb-12">
        <p class="text-gray-900 dark:text-neutral-200"><?php echo e($post->body); ?></p>
    </article>

    <!-- Likes and Comments Section -->
    <section class="mb-12">
        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
            <span class="mr-4">👍 <?php echo e($post->likes->count()); ?> Likes</span>
            <span>💬 <?php echo e($post->comments->count()); ?> Comments</span>
        </div>

        <!-- Comments List -->
        <div class="space-y-6">
            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="p-4 rounded-lg bg-gray-100 dark:bg-gray-800">
                    <p class="text-sm font-semibold text-gray-800 dark:text-gray-200"><?php echo e($comment->user->fullname); ?></p>
                    <p class="text-gray-700 dark:text-gray-300"><?php echo e($comment->body); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-gray-600 dark:text-gray-400">No comments yet. Be the first to comment!</p>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </section>
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/pages/blog/view-post.blade.php ENDPATH**/ ?>