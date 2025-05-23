<article
    class="p-1 @lg:p-2 flex-shrink-0 flex @lg:w-[400px] @lg:h-[500px] w-full h-auto gap-2 flex-col justify-start items-start rounded-lg bg-white dark:bg-zinc-800">
    <div class="p-2 flex flex-col @sm:flex-row @lg:flex-col w-full h-full gap-2">
        <figure class="w-full @sm:w-1/2 @lg:w-full @sm:h-auto @lg:h-[50%] h-48 bg-gray-300 dark:bg-slate-600 rounded-lg">
            <!--[if BLOCK]><![endif]--><?php if($post->cover_image): ?>
                <img src="<?php echo e(asset($post->cover_image)); ?>" alt="error"
                    class="w-full h-full object-contain @lg:object-cover object-center rounded-lg">
            <?php else: ?>
                <div class="w-full h-full rounded-lg gap-2 flex flex-col justify-center items-center">
                    <img src="<?php echo e(asset('images/no-background.png')); ?>" alt="error" class="w-1/3">
                    <h1 class="text-black dark:text-neutral-200 text-sm @lg:text-xl font-medium">
                        No Cover Image Found
                    </h1>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </figure>
        <div class="w-full @sm:w-1/2 @lg:w-full flex flex-col justify-between @lg:justify-start gap-2 @lg:h-[50%]">
            <header class="w-full gap-2 hidden @lg:flex justify-start items-center">
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
                <?php if (isset($component)) { $__componentOriginal65b18da726c0045d2ff66e7a6a1eacfc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal65b18da726c0045d2ff66e7a6a1eacfc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn-nav-link','data' => ['href' => route('blog.view', ['slug' => $post->slug]),'title' => 'Read: '.e($post->title).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('btn-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('blog.view', ['slug' => $post->slug])),'title' => 'Read: '.e($post->title).'']); ?>
                    Read Post
                    <svg class="w-6 h-6 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal65b18da726c0045d2ff66e7a6a1eacfc)): ?>
<?php $attributes = $__attributesOriginal65b18da726c0045d2ff66e7a6a1eacfc; ?>
<?php unset($__attributesOriginal65b18da726c0045d2ff66e7a6a1eacfc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65b18da726c0045d2ff66e7a6a1eacfc)): ?>
<?php $component = $__componentOriginal65b18da726c0045d2ff66e7a6a1eacfc; ?>
<?php unset($__componentOriginal65b18da726c0045d2ff66e7a6a1eacfc); ?>
<?php endif; ?>
            </footer>
        </div>
    </div>
</article>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/components/blog/blogpost-card.blade.php ENDPATH**/ ?>