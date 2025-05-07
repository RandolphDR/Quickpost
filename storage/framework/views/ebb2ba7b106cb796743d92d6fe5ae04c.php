<div class="w-full h-full flex flex-col">
    <header class="w-full p-4">
        <h1 class="font-semibold text-xl lg:text-2xl text-gray-800 dark:text-neutral-200">
            All Blog Posts
        </h1>
    </header>

    <main class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2">
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
    </main>

    <nav class="mt-8 w-full">
        <?php echo e($allPosts->links('vendor.livewire.tailwind')); ?>

    </nav>

</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/pages/blog/all.blade.php ENDPATH**/ ?>