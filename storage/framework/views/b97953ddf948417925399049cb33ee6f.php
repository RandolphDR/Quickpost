<nav class="h-full gap-2 flex flex-col bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700">
    <header class="py-3 px-6 w-full h-20 flex flex-col justify-center items-start">
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
    <main class="py-3 px-6 w-full gap-2 flex flex-col items-center overflow-y-auto scrollbar-custom">
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
                fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                    clip-rule="evenodd" />
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
        <?php if (isset($component)) { $__componentOriginal85371be99fe7282853a7db83964dc204 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal85371be99fe7282853a7db83964dc204 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-dropdown','data' => ['active' => request()->is('admin/blog*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('admin/blog*'))]); ?>
             <?php $__env->slot('trigger', null, []); ?> 
                <button
                    class="py-2 px-3 rounded-lg w-full flex items-center justify-between gap-2.5 text-gray-700 hover:bg-gray-200 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white font-outfit-sans font-medium transition duration-200 ease-in-out">
                    <span class="flex items-center gap-2">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h11.5c.07 0 .14-.007.207-.021.095.014.193.021.293.021h2a2 2 0 0 0 2-2V7a1 1 0 0 0-1-1h-1a1 1 0 1 0 0 2v11h-2V5a2 2 0 0 0-2-2H5Zm7 4a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm-6 4a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM7 6a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H7Zm1 3V8h1v1H8Z"
                                clip-rule="evenodd" />
                        </svg>
                        Blogs
                    </span>
                    <svg class="w-4 h-4 transform transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('content', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-nav-link','data' => ['href' => route('admin.blog.manage'),'active' => request()->routeIs('admin.blog.manage')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.blog.manage')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.blog.manage'))]); ?>All Blogs <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>Categories <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-nav-link','data' => ['href' => route('admin.blog.create'),'active' => request()->routeIs('admin.blog.create')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.blog.create')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.blog.create'))]); ?>Create New Blog <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5)): ?>
<?php $attributes = $__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5; ?>
<?php unset($__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5)): ?>
<?php $component = $__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5; ?>
<?php unset($__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal85371be99fe7282853a7db83964dc204)): ?>
<?php $attributes = $__attributesOriginal85371be99fe7282853a7db83964dc204; ?>
<?php unset($__attributesOriginal85371be99fe7282853a7db83964dc204); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85371be99fe7282853a7db83964dc204)): ?>
<?php $component = $__componentOriginal85371be99fe7282853a7db83964dc204; ?>
<?php unset($__componentOriginal85371be99fe7282853a7db83964dc204); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal85371be99fe7282853a7db83964dc204 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal85371be99fe7282853a7db83964dc204 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-dropdown','data' => ['active' => request()->routeIs('admin.user.manage') || request()->routeIs('admin.user.create')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.user.manage') || request()->routeIs('admin.user.create'))]); ?>
             <?php $__env->slot('trigger', null, []); ?> 
                <button
                    class="py-2 px-3 rounded-lg w-full flex items-center justify-between gap-2.5 text-gray-700 hover:bg-gray-200 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white font-outfit-sans font-medium transition duration-200 ease-in-out">
                    <span class="flex items-center gap-2">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                                clip-rule="evenodd" />
                        </svg>
                        Users
                    </span>
                    <svg class="w-4 h-4 transform transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('content', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-nav-link','data' => ['href' => route('admin.user.manage'),'active' => request()->routeIs('admin.user.manage')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.user.manage')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.user.manage'))]); ?>All Users <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-nav-link','data' => ['href' => route('admin.user.create'),'active' => request()->routeIs('admin.user.create')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.user.create')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.user.create'))]); ?>Create New User <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5)): ?>
<?php $attributes = $__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5; ?>
<?php unset($__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5)): ?>
<?php $component = $__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5; ?>
<?php unset($__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal85371be99fe7282853a7db83964dc204)): ?>
<?php $attributes = $__attributesOriginal85371be99fe7282853a7db83964dc204; ?>
<?php unset($__attributesOriginal85371be99fe7282853a7db83964dc204); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85371be99fe7282853a7db83964dc204)): ?>
<?php $component = $__componentOriginal85371be99fe7282853a7db83964dc204; ?>
<?php unset($__componentOriginal85371be99fe7282853a7db83964dc204); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal85371be99fe7282853a7db83964dc204 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal85371be99fe7282853a7db83964dc204 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-dropdown','data' => ['active' => (request()->routeIs('admin.user.profile') &&
            request()->route('username') === Auth::user()->username) ||
            request()->routeIs('admin.user.settings')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute((request()->routeIs('admin.user.profile') &&
            request()->route('username') === Auth::user()->username) ||
            request()->routeIs('admin.user.settings'))]); ?>
             <?php $__env->slot('trigger', null, []); ?> 
                <button
                    class="py-2 px-3 rounded-lg w-full flex items-center justify-between gap-2.5 text-gray-700 hover:bg-gray-200 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white font-outfit-sans font-medium transition duration-200 ease-in-out">
                    <span class="flex items-center gap-2">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M17 10v1.126c.367.095.714.24 1.032.428l.796-.797 1.415 1.415-.797.796c.188.318.333.665.428 1.032H21v2h-1.126c-.095.367-.24.714-.428 1.032l.797.796-1.415 1.415-.796-.797a3.979 3.979 0 0 1-1.032.428V20h-2v-1.126a3.977 3.977 0 0 1-1.032-.428l-.796.797-1.415-1.415.797-.796A3.975 3.975 0 0 1 12.126 16H11v-2h1.126c.095-.367.24-.714.428-1.032l-.797-.796 1.415-1.415.796.797A3.977 3.977 0 0 1 15 11.126V10h2Zm.406 3.578.016.016c.354.358.574.85.578 1.392v.028a2 2 0 0 1-3.409 1.406l-.01-.012a2 2 0 0 1 2.826-2.83ZM5 8a4 4 0 1 1 7.938.703 7.029 7.029 0 0 0-3.235 3.235A4 4 0 0 1 5 8Zm4.29 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h6.101A6.979 6.979 0 0 1 9 15c0-.695.101-1.366.29-2Z"
                                clip-rule="evenodd" />
                        </svg>
                        Account
                    </span>
                    <svg class="w-4 h-4 transform transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('content', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-nav-link','data' => ['href' => route('admin.user.profile', ['username' => Auth::user()->username]),'active' => request()->routeIs('admin.user.profile') &&
                    request()->route('username') === Auth::user()->username]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.user.profile', ['username' => Auth::user()->username])),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.user.profile') &&
                    request()->route('username') === Auth::user()->username)]); ?>
                    <?php echo e(__('My Profile')); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-nav-link','data' => ['href' => route('admin.user.settings'),'active' => request()->routeIs('admin.user.settings')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.user.settings')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.user.settings'))]); ?>Settings <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5)): ?>
<?php $attributes = $__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5; ?>
<?php unset($__attributesOriginal6f0f38b956b6b145f1aa2b3c8617d5f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5)): ?>
<?php $component = $__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5; ?>
<?php unset($__componentOriginal6f0f38b956b6b145f1aa2b3c8617d5f5); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal85371be99fe7282853a7db83964dc204)): ?>
<?php $attributes = $__attributesOriginal85371be99fe7282853a7db83964dc204; ?>
<?php unset($__attributesOriginal85371be99fe7282853a7db83964dc204); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85371be99fe7282853a7db83964dc204)): ?>
<?php $component = $__componentOriginal85371be99fe7282853a7db83964dc204; ?>
<?php unset($__componentOriginal85371be99fe7282853a7db83964dc204); ?>
<?php endif; ?>
    </main>
</nav>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/components/dashboard/navigation.blade.php ENDPATH**/ ?>