<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['disabled' => false]));

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

foreach (array_filter((['disabled' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<input <?php if($disabled): echo 'disabled'; endif; ?>
    <?php echo e($attributes->merge([
        'type' => 'date',
        'class' => '
                text-gray-900
                placeholder-gray-500
                dark:text-gray-300
                dark:placeholder-gray-400
                border-gray-300
                dark:border-gray-700
                bg-white
                dark:bg-gray-900
                focus:border-indigo-500
                dark:focus:border-indigo-600
                focus:ring-indigo-500
                dark:focus:ring-indigo-600
                rounded-md
                shadow-sm
                [&::-webkit-calendar-picker-indicator]:filter-none
                dark:[&::-webkit-calendar-picker-indicator]:invert
            ',
    ])); ?>>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/components/date-input.blade.php ENDPATH**/ ?>