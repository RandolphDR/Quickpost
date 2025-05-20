<?php $__env->startSection('title', 'Manage Posts'); ?>

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
    <main class="w-full max-w-7xl gap-2 flex flex-col justify-start items-center">
        <header
            class="w-full py-4 px-6 flex justify-between items-center bg-white dark:bg-gray-800 shadow-md rounded-xl">
            <aside class="">
                <h1 class="text-xl  text-gray-800 dark:text-neutral-200 font-medium">
                    <?php echo e(Gate::allows('administrator-access') ? 'Manage all blogs' : 'Manage your blogs'); ?></h1>
            </aside>
            <nav class="">
                <?php if (isset($component)) { $__componentOriginal65b18da726c0045d2ff66e7a6a1eacfc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal65b18da726c0045d2ff66e7a6a1eacfc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn-nav-link','data' => ['href' => route('blog.create'),'class' => 'py-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('btn-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('blog.create')),'class' => 'py-2']); ?>
                    Create New Blog
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
            </nav>
        </header>
        <section class="w-full p-4 bg-white dark:bg-gray-800 shadow-md rounded-xl">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.blog.manage.all', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1659321112-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </section>
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
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/pages/blog/manage-posts.blade.php ENDPATH**/ ?>