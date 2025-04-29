<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" href="<?php echo e(asset('website-logo.svg')); ?>" type="image/x-icon">
    

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

<body class="w-full h-screen font-outfit-sans antialiased bg-gray-100 dark:bg-gray-900">
    
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.ui.notification', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3643000564-0', $__slots ?? [], get_defined_vars());

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

$__html = app('livewire')->mount($__name, $__params, 'lw-3643000564-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        
    </header>
    

    
    <main class="w-full h-[80%] flex flex-col justify-center items-center gap-8">
        <figure class="w-[450px] h-[290px] overflow-hidden flex flex-col justify-center items-center">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.js"></script>
            <dotlottie-player src="<?php echo e(asset(View::yieldContent('banner-path'))); ?>" background="transparent"
                speed="1.5" style="<?php echo $__env->yieldContent('banner-style'); ?>" loop autoplay>
            </dotlottie-player>
        </figure>
        <article class="w-full flex flex-col justify-center items-center text-center">
            <header class="py-4">
                <h5 class="text-5xl text-gray-800 dark:text-white/90 font-semibold">
                    <?php echo $__env->yieldContent('header'); ?>
                </h5>
            </header>
            <p class="text-xl text-gray-400 dark:text-gray-500">
                <?php echo $__env->yieldContent('message'); ?>
            </p>
        </article>
    </main>
    

    
    <?php if(!isset($footer)): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.layouts.footer', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3643000564-2', $__slots ?? [], get_defined_vars());

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
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/layouts/error.blade.php ENDPATH**/ ?>