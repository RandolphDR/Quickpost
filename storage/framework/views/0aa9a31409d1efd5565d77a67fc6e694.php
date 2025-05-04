<section class="w-full gap-4 flex flex-col justify-center items-center">
    <div class="w-full gap-4 flex">
        <p class="text-sm text-gray-500 dark:text-gray-400">👍 <?php echo e($post->likes->count()); ?> Likes</p>
        <p class="text-sm text-gray-500 dark:text-gray-400">💬 <?php echo e($post->comments->count()); ?> Comments</p>
    </div>

    <div class="w-full max-h-96 overflow-x-auto gap-4 flex flex-col justify-start items-center scrollbar-custom">
        <!--[if BLOCK]><![endif]--><?php if($post->comments->isNotEmpty()): ?>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.blog.blogpost-comment', ['comment' => $comment,'post' => $post,'lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'comment-'.e($comment->id).'', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        <?php else: ?>
            <div class="w-full p-6 bg-gray-100 dark:bg-zinc-800 rounded-2xl shadow text-center">
                <p class="text-gray-500 dark:text-neutral-200 text-base">
                    No comments on this blog post yet.
                </p>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>

    <hr class="w-full my-2 border-gray-700 dark:border-neutral-200">

    <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
        <section class="w-full">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-neutral-100 mb-4">Leave A Comment</h1>

            <div class="w-full bg-gray-100 dark:bg-zinc-800 p-4 rounded-lg gap-4 flex flex-col">
                <div class="w-full gap-2 flex justify-start items-center">
                    <img src="<?php echo e(asset(auth()->user()->avatar)); ?>" alt="your avatar"
                        class="rounded-full w-10 h-10 bg-gray-400">
                    <span>
                        <p class="text-gray-900 dark:text-neutral-200 text-sm">
                            <?php echo e(auth()->user()->fullname); ?>

                        </p>
                        <p class="text-gray-600 dark:text-gray-400 text-xs">
                            Posting as registered user
                        </p>
                    </span>
                </div>

                <form wire:submit.prevent="postComment" class="w-full">
                    <textarea wire:model="body"
                        class="w-full rounded-lg border-gray-300 dark:border-zinc-600 dark:bg-zinc-700
                           p-3 text-gray-900 dark:text-neutral-200 focus:ring-indigo-500 resize-none"
                        rows="4" placeholder="Write your comment as <?php echo e(Auth::user()->fullname); ?>..."></textarea>
                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('body'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('body')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>


                    <div class="mt-4 flex justify-end">
                        <?php if (isset($component)) { $__componentOriginald411d1792bd6cc877d687758b753742c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald411d1792bd6cc877d687758b753742c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php echo e(__('Post Comment')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $attributes = $__attributesOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__attributesOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $component = $__componentOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__componentOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
                    </div>
                </form>
            </div>
        </section>
    <?php else: ?>
        <div class="w-full p-6 bg-gray-100 dark:bg-zinc-800 rounded-2xl shadow text-center">
            <p class="text-gray-600 dark:text-gray-300 text-base">
                Please
                <a href="<?php echo e(route('login')); ?>"
                    class="text-blue-700 dark:text-indigo-400 border-b-2 border-transparent hover:border-blue-700 dark:hover:border-indigo-400 transition">
                    login
                </a>
                to post a comment.
            </p>

        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</section>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/pages/blog/comment-section.blade.php ENDPATH**/ ?>