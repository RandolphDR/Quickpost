<div>
    <div class="fixed top-4 left-1/2 transform -translate-x-1/2 z-[9999] w-full max-w-md space-y-2 pointer-events-none">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--[if BLOCK]><![endif]--><?php if(isset($notification['id']) && isset($notification['message'])): ?>
                <div x-data="{
                        show: <?php if ((object) ('notifications.'.$notification['id'].'.show') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('notifications.'.$notification['id'].'.show'->value()); ?>')<?php echo e('notifications.'.$notification['id'].'.show'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('notifications.'.$notification['id'].'.show'); ?>')<?php endif; ?>,
                        type: '<?php echo e($notification['type']); ?>',
                        timeoutId: null,
                        init() {
                            this.timeoutId = setTimeout(() => {
                                this.show = false;
                                setTimeout(() => {
                                    this.$wire.removeNotification(<?php echo e($notification['id']); ?>);
                                }, 300);
                            }, <?php echo e($notification['duration']); ?>);

                            this.$wire.on('hide-notification', ({ id }) => {
                                if (id !== <?php echo e($notification['id']); ?>) return;
                                this.close();
                            });
                        },
                        close() {
                            if (this.timeoutId) clearTimeout(this.timeoutId);
                            this.show = false;
                            setTimeout(() => {
                                this.$wire.removeNotification(<?php echo e($notification['id']); ?>);
                            }, 300);
                        }
                    }"
                    x-show="show"
                    x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 -translate-y-8"
                    x-transition:enter-end="opacity-1 translate-y-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-1"
                    x-transition:leave-end="opacity-0"
                    class="flex items-center px-5 py-3 rounded-lg shadow-lg pointer-events-auto"
                    :class="{
                        'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400': type === 'info',
                        'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400': type === 'error',
                        'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400': type === 'success',
                        'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300': type === 'warning',
                        'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-300': type === 'dark'
                    }"
                    role="alert"
                    wire:key="notification-<?php echo e($notification['id']); ?>"
                >
                    <!-- Notification icon -->
                    <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Notification</span>

                    <!-- Message content -->
                    <div class="ms-3 text-sm font-medium">
                        <span><?php echo e($notification['message']); ?></span>
                    </div>

                    <!-- Close button -->
                    <button @click="close()" type="button"
                        class="ms-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 p-1.5 inline-flex items-center justify-center h-8 w-8"
                        :class="{
                            'bg-blue-50 text-blue-500 hover:bg-blue-200 focus:ring-blue-400 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700': type === 'info',
                            'bg-red-50 text-red-500 hover:bg-red-200 focus:ring-red-400 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700': type === 'error',
                            'bg-green-50 text-green-500 hover:bg-green-200 focus:ring-green-400 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700': type === 'success',
                            'bg-yellow-50 text-yellow-500 hover:bg-yellow-200 focus:ring-yellow-400 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700': type === 'warning',
                            'bg-gray-50 text-gray-500 hover:bg-gray-200 focus:ring-gray-400 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white': type === 'dark'
                        }"
                        aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/components/ui/notification.blade.php ENDPATH**/ ?>