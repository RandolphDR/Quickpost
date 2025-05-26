<?php if (isset($component)) { $__componentOriginal0de143e5b61900e6d7b990ac144ae3fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0de143e5b61900e6d7b990ac144ae3fb = $attributes; } ?>
<?php $component = App\View\Components\DashboardLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\DashboardLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <header class="w-full py-4 px-6 flex justify-between items-center bg-white dark:bg-gray-800 shadow-md rounded-xl">
        <aside class="">
            <h1 class="text-xl  text-gray-800 dark:text-neutral-200 font-medium">
                Manage all blogs
            </h1>
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
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.blog.manage.all', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-4126659537-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0de143e5b61900e6d7b990ac144ae3fb)): ?>
<?php $attributes = $__attributesOriginal0de143e5b61900e6d7b990ac144ae3fb; ?>
<?php unset($__attributesOriginal0de143e5b61900e6d7b990ac144ae3fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0de143e5b61900e6d7b990ac144ae3fb)): ?>
<?php $component = $__componentOriginal0de143e5b61900e6d7b990ac144ae3fb; ?>
<?php unset($__componentOriginal0de143e5b61900e6d7b990ac144ae3fb); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/pages/dashboard/blog/manage-posts.blade.php ENDPATH**/ ?>