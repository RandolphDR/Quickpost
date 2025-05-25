<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <title><?php echo e(config('app.name')); ?> | Dashboard</title>
    <link rel="icon" href="<?php echo e(asset('website-logo.svg')); ?>" type="image/x-icon">
    

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    
    <script>
        if (localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    
</head>

<body class="bg-white dark:bg-gray-900 font-outfit-sans antialiased w-full flex justify-center items-stretch">
    <aside class="py-3 px-6 min-w-[300px] w-[25%] border border-gray-300">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.dashboard.navigation', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1428929712-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </aside>
    <main class="py-3 px-6 w-full h-screen border border-gray-300">

    </main>

    

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/layouts/app.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
    
</body>

</html>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>