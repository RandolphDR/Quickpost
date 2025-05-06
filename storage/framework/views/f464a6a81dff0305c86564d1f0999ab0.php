<?php $__env->startSection('title', 'About Us'); ?>

<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section class="w-full max-w-7xl flex flex-col justify-start items-center p-12 gap-6">
        <header class="w-full flex flex-col justify-center items-center text-center p-12 gap-6">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-gray-800 dark:text-neutral-200">
                About QuickPost
            </h1>
            <p class="w-2/3 text-lg text-gray-600 dark:text-gray-400 max-w-3xl">
                <strong>QuickPost</strong> is a Laravel + Livewire blog system built as a final project for App Dev.
                It includes admin tools to manage posts, categories, comments, cover images, and post visibility
                (draft/published),
                with real-time features and pagination support.
            </p>
        </header>
        <section class="w-2/3">
            <img id="About-Banner" src="<?php echo e(asset('images/global/Dark-Banner.svg')); ?>"
                data-light-src="<?php echo e(asset('images/global/Light-Banner.svg')); ?>"
                data-dark-src="<?php echo e(asset('images/global/Dark-Banner.svg')); ?>" alt="About Banner"
                class="w-full drop-shadow-xl dark:drop-shadow-[0_20px_60px_rgba(96,165,250,0.2)]" />
        </section>
    </section>

    <hr class="w-full max-w-7xl my-8 border-blue-500" />

    <section class="w-full max-w-7xl p-8 gap-8 flex flex-col justify-center items-center">
        <header class="py-4 gap-4 flex flex-col justify-center items-center text-center">
            <h1 class="text-5xl  text-gray-800 dark:text-neutral-200">
                Meet the Developer
            </h1>
            <p class="w-2/3 text-lg text-gray-600 dark:text-neutral-400">
                Discover the developer behind QuickPost. The simple and powerful blog system designed to make content
                creation, management, and sharing easier for everyone.
            </p>
        </header>
        <main class="w-full gap-8 flex flex-row justify-center items-start">
            
            <div
                class="w-[450px] h-[530px] rounded-2xl bg-white dark:bg-gray-800 shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-2 hover:shadow-2xl dark:hover:shadow-[0_30px_80px_rgba(96,165,250,0.35)]">
                <figure class="w-full h-5/6 rounded-t-xl overflow-hidden">
                    <img src="<?php echo e(asset('images/dev/dev.JPG')); ?>" alt="error" class="w-full object-cover">
                </figure>
                <article class="w-full h-1/6 rounded-b-xl px-4 gap-4 flex justify-between items-center">
                    <header>
                        <h5 class="text-xl text-gray-800 dark:text-neutral-100 mb-1">
                            <?php echo e(config('app.developer')); ?>

                        </h5>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">Web Developer / BSIT Student</p>
                    </header>
                    <nav class="flex items-center gap-4">
                        <a href="https://github.com/RandolphDR" target="_blank" title="Visit My Github"
                            class="group relative flex items-center justify-center p-1.5 rounded-xl bg-neutral-100/80 dark:bg-gray-800/90 shadow-sm hover:shadow-md dark:shadow-gray-900/30 transition-all duration-200 hover:scale-[1.08] active:scale-95 border border-gray-200/50 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600">

                            <svg class="w-8 h-8 text-gray-800 dark:text-gray-200 group-hover:text-gray-900 dark:group-hover:text-white transition-colors duration-200"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="https://facebook.com/RandolphDR" target="_blank" title="Visit My Facebook"
                            class="group relative flex items-center justify-center p-1.5 rounded-xl bg-neutral-100/80 dark:bg-gray-800/90 shadow-sm hover:shadow-md dark:shadow-gray-900/30 transition-all duration-200 hover:scale-[1.08] active:scale-95 border border-gray-200/50 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600">

                            <svg class="w-8 h-8 text-gray-800 dark:text-gray-100/90 group-hover:text-gray-900 dark:group-hover:text-white transition-colors duration-200"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </nav>
                </article>
            </div>
            <aside class="w-1/3 border-l-4 border-blue-500 pl-4 ">
                <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200 mb-2">My Purpose:</h2>
                <blockquote class="text-lg italic text-gray-500 dark:text-neutral-300">
                    “I developed QuickPost to fulfill the final requirement for my Application Development Subject — and
                    to showcase my passion for clean, functional web systems.”
                </blockquote>
            </aside>
        </main>
    </section>

    <hr class="w-full max-w-7xl my-8 border-blue-500" />

    <section class="w-full max-w-7xl px-6 py-12 mx-auto text-center flex flex-col items-center gap-6">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-gray-800 dark:text-neutral-200">
            Ready to Try QuickPost?
        </h1>
        <p class="w-2/3 text-lg text-gray-600 dark:text-neutral-400">
            Dive into a clean and simple blog system built for speed and usability. Whether you're reading or writing,
            QuickPost keeps things smooth and easy.
        </p>
        <div class="mt-6 flex justify-center">
            <a href="<?php echo e(Auth::check() ? route('explore') : route('login')); ?>"
                class="inline-flex items-center gap-x-2 px-6 py-3 rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-all duration-300 text-base font-semibold shadow-md hover:shadow-lg focus:outline-none"
                wire:navigate>
                Explore QuickPost
                <svg class="size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </section>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/pages/about.blade.php ENDPATH**/ ?>