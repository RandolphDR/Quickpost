<main class="w-full h-full flex flex-col">
    <!--[if BLOCK]><![endif]--><?php if(Auth::check() && $username === Auth::user()->username): ?>
        <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
            <nav class="flex space-x-4">
                <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['class' => 'cursor-pointer','wire:click' => 'setStatus(\'published\')','active' => $status === 'published']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'cursor-pointer','wire:click' => 'setStatus(\'published\')','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($status === 'published')]); ?>
                    Published
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['class' => 'cursor-pointer','wire:click' => 'setStatus(\'draft\')','active' => $status === 'draft']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'cursor-pointer','wire:click' => 'setStatus(\'draft\')','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($status === 'draft')]); ?>
                    Drafts
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
            </nav>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <header class="w-full p-4 flex justify-between items-center">
        <h1 class="font-semibold text-xl lg:text-2xl text-gray-800 dark:text-neutral-200">
            <?php echo e($username ? "{$username}'s Blog Posts" : 'All Blog Posts'); ?>

        </h1>
        <p class="text-sm text-gray-600 dark:text-neutral-400">
            <span wire:loading.flex>
                <svg class="animate-spin h-5 w-5 text-indigo-600 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4">
                    </circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                Loading Page...
            </span>
            <span wire:loading.remove>
                Viewing Page <?php echo e($allPosts->currentPage()); ?> of <?php echo e($allPosts->lastPage()); ?>

            </span>
        </p>
    </header>

    <section class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2">
        <div wire:loading.flex class="col-span-full gap-2 flex flex-col items-center justify-center py-4">
            <div class="flex flex-row gap-2">
                <div class="w-3 h-3 rounded-full bg-blue-600 animate-bounce [animation-delay:.1s]"></div>
                <div class="w-3 h-3 rounded-full bg-blue-600 animate-bounce [animation-delay:.3s]"></div>
                <div class="w-3 h-3 rounded-full bg-blue-600 animate-bounce [animation-delay:.5s]"></div>
            </div>
            <p class="text-gray-600 dark:text-neutral-400">
                Please wait while we load the posts...
            </p>
        </div>

        <div wire:loading.remove class="contents">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $allPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.blog.blogpost-card', ['postId' => $post->id,'class' => 'w-full h-full p-1 lg:p-2']);

$__html = app('livewire')->mount($__name, $__params, 'post-'.e($post->id).'', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </section>

    <nav class="mt-8 w-full" wire:loading.remove>
        <?php echo e($allPosts->links('vendor.livewire.tailwind')); ?>

    </nav>
</main>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/pages/blog/all.blade.php ENDPATH**/ ?>