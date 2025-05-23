<?php $__env->startPush('scripts'); ?>
    <script src=""></script>
<?php $__env->stopPush(); ?>

<section class="w-full px-4 gap-4 flex flex-col justify-center items-center">
    <div class="w-full flex items-center gap-6 text-gray-400">
        <div class="flex items-center gap-2">
            <button wire:click.prevent="toggleLike"
                class="flex items-center cursor-pointer hover:text-blue-500 transition-colors">
                <!--[if BLOCK]><![endif]--><?php if($isLiked): ?>
                    <svg class="w-6 h-6 fill-current text-[#1877F2] animate-checked-icon-like" viewBox="0 0 512 512">
                        <path
                            d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z" />
                    </svg>
                <?php else: ?>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 512 512">
                        <path
                            d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.1s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16H286.5c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8H384c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32z" />
                    </svg>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </button>

            <span class="text-sm text-gray-900 dark:text-gray-400" wire:text="postLikeCount"><?php echo e($postLikeCount); ?>

                Likes</span>
        </div>


        <div class="flex items-center gap-2">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                <path
                    d="M12 2C6.477 2 2 6.477 2 12c0 1.5.375 2.908 1.031 4.141l-1.063 3.604a.75.75 0 0 0 .921.921l3.604-1.063A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zM8 13a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm4 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm4 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </svg>
            <span class="text-sm text-gray-900 dark:text-gray-400"><?php echo e($post->comments->count()); ?> Comments</span>
        </div>
    </div>

    <div class="w-full max-h-96 overflow-x-auto gap-4 flex flex-col justify-start items-center scrollbar-custom">
        <!--[if BLOCK]><![endif]--><?php if($post->comments->isNotEmpty()): ?>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.blog.blogpost-comment', ['commentId' => $comment->id,'lazy' => true]);

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
                        <p class="gap-1 flex items-center text-gray-900 dark:text-neutral-200 text-sm">
                            <?php echo e(auth()->user()->fullname); ?>

                            <!--[if BLOCK]><![endif]--><?php if(auth()->user()->is_verified): ?>
                                <span class="cursor-help" title="Verified User">
                                    <svg class="w-4 h-4 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 text-xs">
                            Posting as <?php echo e(auth()->user()->is_verified ? 'verified' : 'registered'); ?> user
                        </p>
                    </span>
                </div>

                <form wire:submit.prevent="postComment" class="w-full">
                    <textarea wire:model="body"
                        class="w-full rounded-lg border-gray-300 dark:border-zinc-600 dark:bg-zinc-700
                           p-3 text-gray-900 dark:text-neutral-200 focus:ring-indigo-500 placeholder-gray-500 dark:placeholder-gray-400 resize-none"
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