<footer class="w-full bg-white dark:bg-gray-900">
    <div class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8">
        <div
            class="flex flex-col items-center gap-4 rounded-lg bg-indigo-600 dark:bg-gray-800 p-6 shadow-lg sm:flex-row sm:justify-between">
            <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
                <strong class="text-xl text-white sm:text-xl"> Create and Post Instantly with Quickpost! </strong>
            <?php else: ?>
                <strong class="text-xl text-white sm:text-xl"> Ready to start your posting journey? </strong>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


            <a href=""
                class="inline-flex items-center gap-2 rounded-full border border-white bg-white dark:bg-indigo-600 dark:border-transparent px-8 py-3 text-indigo-600 dark:text-white/90 hover:bg-transparent hover:text-white focus:ring-3 focus:outline-hidden">
                <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
                    <span class="text-sm font-medium">Make a Post Now</span>
                <?php else: ?>
                    <span class="text-sm font-medium">Start Posting with QuickPost</span>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 12H5m14 0-4 4m4-4-4-4" />
                </svg>
            </a>
        </div>

        <div class="px-4 mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <div class="text-center sm:text-left">
                <a href="<?php echo e(route('homepage')); ?>" wire:navigate class="shrink-0 flex items-center">
                    <?php if (isset($component)) { $__componentOriginal8892e718f3d0d7a916180885c6f012e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8892e718f3d0d7a916180885c6f012e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => ['class' => 'w-48']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-48']); ?>
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
            </div>

            <div class="text-center sm:text-left">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Quickpost</p>
                <ul class="mt-8 space-y-4 text-sm">
                    <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->guest()): ?>
                        <li>
                            <a href="<?php echo e(route('login')); ?>"
                                class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300"
                                wire:navigate>
                                Login
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('register')); ?>"
                                class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300"
                                wire:navigate>
                                Register
                            </a>
                        </li>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <li>
                        <a href="<?php echo e(route('about')); ?>"
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300"
                            wire:navigate>
                            About Us
                        </a>
                    </li>
                </ul>
            </div>

            <div class="text-center sm:text-left">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Blog Category</p>
                <ul class="mt-8 space-y-4 text-sm">
                    <li>
                        <a href="#"
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            Education
                        </a>
                    </li>
                    <li>
                        <a
                            href="#"class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            Technology
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            Lifestyle
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            Travel
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            Food
                        </a>
                    </li>
                </ul>
            </div>

            <div class="text-center sm:text-left">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Connect</p>
                <ul class="mt-8 space-y-4 text-sm">
                    <li>
                        <a href="#"
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            FAQs
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mt-16 border-t border-gray-400 flex flex-col justify-center items-center p-4">
        
        <p class="font-outfit-sans text-center text-sm text-gray-500 dark:text-gray-400">
            &#169; <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?>. Developed by <?php echo e(config('app.developer')); ?>

        </p>
    </div>
</footer><?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views\livewire/components/layouts/footer.blade.php ENDPATH**/ ?>