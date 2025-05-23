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
    <section class="w-full overflow-hidden">
        <div aria-hidden="true" class="w-full flex absolute -top-96 start-1/2 transform -translate-x-1/2 z-0">
            <div
                class="bg-gradient-to-r from-violet-300/50 to-purple-100 blur-3xl w-[500px] h-[500px] rotate-[-60deg] transform -translate-x-40 dark:from-violet-900/50 dark:to-purple-900">
            </div>
            <div
                class="bg-gradient-to-tl from-blue-50 via-blue-100 to-blue-50 blur-3xl w-[1440px] h-[600px] rounded-full origin-top-left -rotate-12 -translate-x-60 dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-blue-900/70">
            </div>
        </div>

        <div class="relative py-16">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                <div class="max-w-2xl text-center mx-auto">
                    <p class="text-sm font-medium text-gray-600 dark:text-[#7592ff]">
                        LARAVEL LIVEWIRE ⨯ TAILWIND CSS
                    </p>

                    <div class="mt-5 max-w-2xl">
                        <h1
                            class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
                            Create and Post Instantly.
                        </h1>
                    </div>

                    <div class="mt-10 max-w-3xl">
                        <p class="text-lg text-gray-600 dark:text-neutral-400">
                            Share your stories, ideas, and updates effortlessly. QuickPost lets you publish blogs
                            instantly — connecting you with your audience the moment inspiration hits.
                        </p>
                    </div>

                    <div class="mt-8 gap-3 flex justify-center">
                        <a href="#"
                            class="py-3 px-4 inline-flex justify-center items-center rounded-lg border border-transparent bg-blue-600 text-sm font-medium text-white hover:bg-blue-800 active:bg-blue-600 focus:bg-blue-700 focus:outline-none active:ring-2 active:ring-indigo-500 active:ring-offset-2 dark:focus:ring-offset-gray-800 tracking-wider transition ease-in-out duration-150"
                            wire:navigate>
                            CREATE YOUR BLOG
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-4 w-full max-w-7xl flex flex-col justify-start items-start">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('pages.blog.popular', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3074374080-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </section>
    <section class="p-4 w-full max-w-7xl flex flex-col justify-start items-start">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('pages.blog.latest', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3074374080-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </section>
    <section class="w-full min-h-[50vh] flex flex-col justify-center items-center text-center px-4 gap-4">
        <h1 class="font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
            <?php echo e(Auth::check() ? 'Explore More Blogs' : ' Explore More When You Log In'); ?>

        </h1>
        <p class="text-gray-600 text-lg md:text-xl dark:text-gray-400 max-w-2xl">
            Discover the latest insights, trends, and expert tips in our blog. Stay informed with fresh content and
            practical guides.
        </p>
        <div class="mt-8 gap-3 flex justify-center">
            <a href="<?php echo e(Auth::check() ? route('explore') : route('login')); ?>"
                class="py-3 px-4 inline-flex justify-center items-center rounded-lg border border-transparent bg-blue-600 text-sm font-medium text-white hover:bg-blue-800 active:bg-blue-600 focus:bg-blue-700 focus:outline-none active:ring-2 active:ring-indigo-500 active:ring-offset-2 dark:focus:ring-offset-gray-800 tracking-wider transition ease-in-out duration-150"
                wire:navigate>
                CLICK HERE
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
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
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/welcome.blade.php ENDPATH**/ ?>