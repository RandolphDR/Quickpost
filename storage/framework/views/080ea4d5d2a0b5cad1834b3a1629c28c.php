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

<body class="bg-gray-100 dark:bg-gray-900 font-outfit-sans antialiased w-full flex justify-center items-stretch">
    
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.ui.notification', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1428929712-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    

    
    <aside class="fixed top-0 left-0 h-screen w-[20%] min-w-[300px]">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.dashboard.navigation', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1428929712-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </aside>
    

    
    <main class="ml-[20%] w-full min-h-screen">
        
        <header class="fixed top-0 left-[20%] right-0 h-20 z-10">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.dashboard.header', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1428929712-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </header>
        

        
        <section class="mt-[5.16rem] pt-5 px-5 flex flex-col justify-start items-center gap-4">
            <?php echo e($slot); ?>

        </section>
        

        
        <footer>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.dashboard.footer', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1428929712-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </footer>
        
    </main>
    

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/layouts/app.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
    
</body>

</html>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>