<div class="@container w-full h-full gap-2 flex flex-col justify-start items-start">
    <header class="w-full p-2 flex flex-col justify-center items-start">
        <h1 class="font-semibold text-xl @lg:text-2xl text-gray-800 dark:text-neutral-200 text-center">
            Latest Blogs
        </h1>
    </header>

    <main
        class="w-full overflow-y-auto @lg:overflow-x-auto py-2 flex flex-col @lg:flex-row justify-start items-center gap-4 scrollbar-custom">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $latestPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
    </main>
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/pages/blog/latest.blade.php ENDPATH**/ ?>