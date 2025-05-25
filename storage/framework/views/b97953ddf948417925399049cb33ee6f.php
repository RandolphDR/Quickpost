<nav
    class="w-full h-full gap-4 flex flex-col py-3 px-6 bg-white dark:bg-gray-800 shadow-md border-r border-gray-400 dark:border-gray-700">
    <header class="w-full h-20 flex flex-col justify-center items-start">
        <a href="<?php echo e(route('admin.dashboard')); ?>" wire:navigate>
            <?php if (isset($component)) { $__componentOriginal8892e718f3d0d7a916180885c6f012e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8892e718f3d0d7a916180885c6f012e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $attributes = $__attributesOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $component = $__componentOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__componentOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
        </a>
    </header>
    <main class="w-full gap-2 flex flex-col items-center">
        <?php if (isset($component)) { $__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-nav-link','data' => ['href' => route('admin.dashboard'),'active' => request()->routeIs('admin.dashboard')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.dashboard')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.dashboard'))]); ?>
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
            </svg>
            Dashboard
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5)): ?>
<?php $attributes = $__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5; ?>
<?php unset($__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5)): ?>
<?php $component = $__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5; ?>
<?php unset($__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-nav-link','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                    d="M4.37 7.657c2.063.528 2.396 2.806 3.202 3.87 1.07 1.413 2.075 1.228 3.192 2.644 1.805 2.289 1.312 5.705 1.312 6.705M20 15h-1a4 4 0 0 0-4 4v1M8.587 3.992c0 .822.112 1.886 1.515 2.58 1.402.693 2.918.351 2.918 2.334 0 .276 0 2.008 1.972 2.008 2.026.031 2.026-1.678 2.026-2.008 0-.65.527-.9 1.177-.9H20M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            Blogs
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5)): ?>
<?php $attributes = $__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5; ?>
<?php unset($__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5)): ?>
<?php $component = $__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5; ?>
<?php unset($__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-nav-link','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                    d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
            </svg>
            Users
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5)): ?>
<?php $attributes = $__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5; ?>
<?php unset($__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5)): ?>
<?php $component = $__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5; ?>
<?php unset($__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5); ?>
<?php endif; ?>
    </main>
</nav>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/components/dashboard/navigation.blade.php ENDPATH**/ ?>