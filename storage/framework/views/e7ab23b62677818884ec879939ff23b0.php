<?php $__env->startSection('title', 'Explore'); ?>

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
    <section class="w-full h-[40vh] gap-4 flex flex-col justify-center items-center">
        <h1 class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
            Explore Blogs
        </h1>
        <p class="text-gray-500 text-xl dark:text-gray-400">
            Stay updated with the latest inisights, trends, and expert tipss in our recent blog posts. From industry
            news to practical guides.
        </p>
    </section>

    <p class="text-gray-500 text-xl dark:text-gray-400">
        UPCOMING PLAN: </br>
        - FINISH SETTING UP PROFILE PAGE </br>
        - WE WILL DIVE DEEP INTO THE MANAGEMENT OF THE BLOG POST </br>
        - FIX SETTINGS ADD A LAZY LOADER FOR EACH SECTION </br>
    </p>

    <main class="w-full flex flex-col lg:flex-row gap-8 p-6">
        <section class="lg:w-3/4 w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg overflow-hidden">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('pages.blog.all', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1526195672-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </section>

        <aside class="lg:w-1/3 w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('pages.blog.popular', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1526195672-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </aside>
    </main>
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
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/pages/explore.blade.php ENDPATH**/ ?>