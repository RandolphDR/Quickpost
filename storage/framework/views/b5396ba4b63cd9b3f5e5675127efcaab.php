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

    <section class="w-full gap-4 flex flex-col justify-center items-center">
        <div class="w-full gap-4 flex">
            <p class="text-sm text-gray-500 dark:text-gray-400">👍 <?php echo e($post->likes->count()); ?> Likes</p>
            <p class="text-sm text-gray-500 dark:text-gray-400">💬 <?php echo e($post->comments->count()); ?> Comments</p>
        </div>
        <div class="w-full max-h-96 overflow-x-auto gap-4 flex flex-col justify-start items-center scrollbar-custom">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="w-full bg-gray-100 dark:bg-zinc-800 p-4 gap-4 flex flex-col justify-center items-center rounded-lg">
                    <header class="w-full flex justify-between items-center">
                        <div class="w-full gap-2 flex justify-start items-center">
                            <img src="<?php echo e(asset($comment->user->avatar)); ?>" alt="error"
                                class="rounded-full w-10 h-10 bg-gray-400">
                            <span>
                                <p class="text-gray-900 dark:text-neutral-200 text-sm">
                                    <?php echo e($comment->user->fullname); ?>

                                </p>
                                <p class="text-gray-600 dark:text-gray-400 text-xs">
                                    <?php echo e($comment->created_at->format('d F Y')); ?>

                                </p>
                            </span>
                        </div>
                        <!--[if BLOCK]><![endif]--><?php if(Gate::allows('manage-post', $post) || (Auth::check() && $comment->user->id === auth()->user()->id)): ?>
                            <?php if (isset($component)) { $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => ['align' => 'right','width' => '48']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
                                 <?php $__env->slot('trigger', null, []); ?> 
                                    <button type="button" class="">
                                        <svg class="w-6 h-6 text-gray-900 dark:text-neutral-200 font-medium"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                d="M12 6h.01M12 12h.01M12 18h.01" />
                                        </svg>
                                    </button>
                                 <?php $__env->endSlot(); ?>
                                 <?php $__env->slot('content', null, []); ?> 
                                    <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        Delete
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                                 <?php $__env->endSlot(); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $attributes = $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $component = $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </header>
                    <section class="w-full">
                        <p class="text-gray-900 dark:text-neutral-200 text-sm">
                            <?php echo e($comment->body); ?>

                        </p>
                    </section>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </section>

    <hr class="w-full my-2 border-gray-700 dark:border-neutral-200">

    <section class="w-full">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-neutral-100">Leave A Comment (Coming Soon)</h1>

    </section>
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/pages/blog/view-post.blade.php ENDPATH**/ ?>