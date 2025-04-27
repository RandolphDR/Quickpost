<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['status']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['status']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<!--[if BLOCK]><![endif]--><?php if($status): ?>
    <div x-data
         x-init="setTimeout(() => {
             $el.classList.remove('opacity-0', '-translate-y-2');
             setTimeout(() => {
                 $el.classList.add('opacity-0', '-translate-y-2');
                 setTimeout(() => $el.remove(), 300); // Match transition duration
             }, 3000);
         }, 300)"
         class="z-50 fixed top-4 left-1/2 -translate-x-1/2 max-w-xs w-full transition-all duration-300 ease-out opacity-0 -translate-y-2">
        <div class="bg-white dark:bg-gray-800 shadow rounded px-4 py-3 border border-gray-200 dark:border-gray-700 flex justify-between items-center">
            <span class="text-sm text-gray-800 dark:text-gray-200"><?php echo e($status); ?></span>
            <button
                @click="
                    $el.closest('[x-data]').classList.add('opacity-0', '-translate-y-2');
                    setTimeout(() => $el.closest('[x-data]').remove(), 300)
                "
                class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 ml-2"
            >
                ×
            </button>
        </div>
    </div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/components/auth-session-status.blade.php ENDPATH**/ ?>