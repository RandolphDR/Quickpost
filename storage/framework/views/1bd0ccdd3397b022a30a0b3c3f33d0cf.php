<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'contentClasses' => 'border-l-2 border-gray-200 dark:border-gray-600 pl-4 ml-3 space-y-1',
    'active' => false,
]));

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

foreach (array_filter(([
    'contentClasses' => 'border-l-2 border-gray-200 dark:border-gray-600 pl-4 ml-3 space-y-1',
    'active' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div x-data="{
    open: <?php echo e($active ? 'true' : 'false'); ?>,
    height: 0,
    init() {
        const content = this.$refs.content;
        this.height = this.open ? content.scrollHeight : 0;

        this.$watch('open', value => {
            this.height = value ? content.scrollHeight : 0;
        });
    }
}" class="w-full">
    <div @click="open = !open" :class="open ? 'bg-gray-200 dark:bg-gray-700' : ''" class="cursor-pointer rounded-lg">
        <?php echo e($trigger); ?>

    </div>

    <div x-ref="content" :style="{ height: open ? height + 'px' : '0px' }" :class="open ? 'mt-2' : ''"
        class="gap-1 flex flex-col transition-all duration-300 ease-in-out overflow-hidden <?php echo e($contentClasses); ?>">
        <?php echo e($content); ?>

    </div>
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/components/dashboard-dropdown.blade.php ENDPATH**/ ?>