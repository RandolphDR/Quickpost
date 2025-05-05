<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <title>
        <?php if (! empty(trim($__env->yieldContent('title')))): ?>
            <?php echo $__env->yieldContent('title'); ?> | <?php echo e(config('app.name')); ?>

        <?php else: ?>
            <?php echo e(config('app.name')); ?>

        <?php endif; ?>
    </title>
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

<body
    class="bg-white dark:bg-gray-900 font-outfit-sans antialiased w-full min-h-screen flex flex-col justify-start items-start">
    
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.ui.notification', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1421673878-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    

    
    <header class="sticky top-0 z-10 w-full flex flex-col justify-start items-center">
        
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.layouts.navigation', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1421673878-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        
    </header>
    

    
    <main class="w-full min-h-[90vh] py-4 flex flex-col justify-start items-center gap-2 bg-gray-100 dark:bg-gray-900">
        <?php echo e($slot); ?>

    </main>
    

    
    <?php if (! empty(trim($__env->yieldContent('footer')))): ?>
        <?php echo $__env->yieldContent('footer'); ?>
    <?php else: ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.layouts.footer', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1421673878-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php endif; ?>
    


    <!-- Scripts -->
    <script src="<?php echo e(asset('js/layouts/app.js')); ?>"></script>
    
</body>

</html>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/layouts/app.blade.php ENDPATH**/ ?>