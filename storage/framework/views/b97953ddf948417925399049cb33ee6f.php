<nav class="gap-4 flex flex-col">
    <header class="w-full h-20 flex flex-col justify-center">
        <a href="<?php echo e(route('homepage')); ?>" wire:navigate>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-nav-link','data' => ['href' => route('homepage'),'active' => request()->routeIs('homepage')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('homepage')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('homepage'))]); ?>
            Home
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-nav-link','data' => ['href' => route('admin.dashboard'),'active' => request()->routeIs('admin.dashboard')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.dashboard')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.dashboard'))]); ?>
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

        <span
            class="py-2 px-3 rounded-lg w-full flex flex-row justify-start items-center gap-2.5 transition ease-in-out hover:bg-gray-800">
            <button wire:click="logout" class="text-black dark:text-white/90 font-outfit-sans font-medium">
                Logout
            </button>
        </span>
    </main>
    
</nav>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/components/dashboard/navigation.blade.php ENDPATH**/ ?>