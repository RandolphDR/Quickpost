<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section class="w-full min-h-screen p-6 flex flex-col items-center gap-6">
        <h1 class="font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
            Your Profile Page
        </h1>
        <p class="text-gray-800 dark:text-neutral-200">Profile Summary</p>
        <p class="text-gray-800 dark:text-neutral-200">Total Posts: <?php echo e(Auth::user()->posts->count()); ?></p>

        <div class="w-full max-w-4xl flex flex-col gap-4">
            <?php $__empty_1 = true; $__currentLoopData = Auth::user()->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <article class="p-4 border rounded-lg shadow-sm bg-white dark:bg-neutral-800">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-100"><?php echo e($post->title); ?></h2>
                    <p class="mt-2 text-gray-700 dark:text-neutral-300"><?php echo e($post->description); ?></p>
                    <p class="mt-2 text-sm text-blue-600 dark:text-blue-400">Likes: <?php echo e($post->likes->count()); ?></p>

                    <div class="mt-4">
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-neutral-200">Comments:</h3>
                        <?php $__empty_2 = true; $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                            <div class="mt-1 pl-2 border-l border-gray-300 dark:border-gray-600">
                                <p class="text-gray-700 dark:text-neutral-300 text-sm">
                                    <span class="font-medium"><?php echo e($comment->user->name); ?>:</span>
                                    <?php echo e($comment->body); ?>

                                </p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                            <p class="text-sm text-gray-500 dark:text-gray-400">No comments yet.</p>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-gray-600 dark:text-neutral-400">You haven't posted anything yet.</p>
            <?php endif; ?>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/pages/user/profile.blade.php ENDPATH**/ ?>