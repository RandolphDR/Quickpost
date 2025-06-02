<div>
    <!--[if BLOCK]><![endif]--><?php if($user->role === 'administrator' || $user->role === 'developer'): ?>
        <main class="rounded-lg w-full bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl">
                    Welcome to my Profile
                </h1>
                <p class="mt-4 text-lg leading-6 text-indigo-100">
                    Explore insights, projects, and innovations from our QuickPost developers.
                </p>
            </div>
        </main>
    <?php else: ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('pages.blog.all', ['username' => $username]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1816206671-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/pages/user/profile/body.blade.php ENDPATH**/ ?>