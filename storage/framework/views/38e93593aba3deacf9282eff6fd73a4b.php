<div class="@container w-full h-full gap-2 flex flex-col justify-start items-start">
    <header class="w-full p-2 flex flex-col justify-center items-start">
        <h1 class="font-semibold text-xl @lg:text-2xl text-gray-800 dark:text-neutral-200 text-center">
            Popular Blogs
        </h1>
    </header>

    <main
        class="w-full overflow-y-auto @lg:overflow-x-auto py-2 flex flex-col @lg:flex-row justify-start items-center gap-4 scrollbar-custom">
        <!--[if BLOCK]><![endif]--><?php if($popularPosts->isNotEmpty()): ?>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $popularPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.blog.blogpost-card', ['postId' => $post->id,'lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'post-'.e($post->id).'', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        <?php else: ?>
            <div class="w-full p-6 bg-gray-100 dark:bg-zinc-800 rounded-2xl shadow text-center">
                <p class="text-gray-500 dark:text-neutral-200 text-base">
                    No popular blogs available at the moment.
                </p>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </main>
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/pages/blog/popular.blade.php ENDPATH**/ ?>