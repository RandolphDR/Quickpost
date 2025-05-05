<header class="w-full max-w-7xl bg-white dark:bg-gray-800 shadow-md rounded-xl">
    <main class="w-full p-4 gap-4 flex flex-col justify-center items-center">
        <section
            class="w-full bg-gray-100 dark:bg-gray-900 rounded-xl flex flex-col justify-start items-center relative">
            <svg class="absolute" preserveAspectRatio="none" width="100%" height="150" viewBox="0 0 1113 161"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_697_201879)">
                    <rect x="1" width="1112" height="348" fill="#B2E7FE"></rect>
                    <rect width="185.209" height="704.432"
                        transform="matrix(0.50392 0.86375 -0.860909 0.508759 435.452 -177.87)" fill="#FF8F5D">
                    </rect>
                    <rect width="184.653" height="378.667"
                        transform="matrix(0.849839 -0.527043 0.522157 0.852849 -10.4556 -16.4521)" fill="#3ECEED">
                    </rect>
                    <rect width="184.653" height="189.175"
                        transform="matrix(0.849839 -0.527043 0.522157 0.852849 35.4456 58.5195)" fill="#4C48FF">
                    </rect>
                </g>
                <defs>
                    <clipPath id="clip0_697_201879">
                        <rect x="0.5" width="1112" height="161" rx="12" fill="white"></rect>
                    </clipPath>
                </defs>
            </svg>
            <div class="relative flex flex-col justify-center items-center gap-4 mt-20">
                <div class="flex flex-col justify-center items-center gap-2 relative">
                    <img src="<?php echo e(asset($user->avatar)); ?>" alt="Avatar"
                        class="w-32 h-32 rounded-full bg-gray-400 border-2 border-neutral-200 shadow-lg">
                    <span class="text-center">
                        <h3 class="text-gray-900 dark:text-neutral-200 text-xl gap-1 flex items-center">
                            <?php echo e($user->fullname); ?>

                            <!--[if BLOCK]><![endif]--><?php if($user->is_verified): ?>
                                <svg class="w-4 h-4 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                        clip-rule="evenodd" />
                                </svg>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm"><?php echo e('@' . $user->username); ?></p>
                    </span>

                </div>
            </div>
            <div class="w-full relative flex justify-between items-center p-4">
                <div class="gap-4 flex justify-center items-center">
                    <span
                        class="inline-flex items-center gap-x-2 py-2 px-4 text-sm rounded-lg bg-gray-300 dark:bg-gray-700">
                        <svg class="w-5 h-5 text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.8">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                        <div class="text-sm font-medium flex items-center gap-2">
                            <p class="text-gray-500 dark:text-gray-400">Published Posts:</p>
                            <p class="text-gray-900 dark:text-neutral-200"><?php echo e($postCount); ?></p>
                        </div>
                    </span>

                    <span
                        class="inline-flex items-center gap-x-2 py-2 px-4 text-sm rounded-lg bg-gray-300 dark:bg-gray-700">
                        <svg class="w-5 h-5 text-indigo-400" viewBox="0 0 512 512" fill="currentColor">
                            <path
                                d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.1s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16H286.5c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8H384c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32z" />
                        </svg>
                        <div class="font-medium flex items-center gap-2">
                            <p class="text-gray-500 dark:text-gray-400">Total Likes:</p>
                            <p class="text-gray-900 dark:text-neutral-200"><?php echo e($likeCount); ?></p>
                        </div>
                    </span>
                </div>
                <!--[if BLOCK]><![endif]--><?php if(Gate::allows('user-access') && $user->id === auth()->user()->id): ?>
                    <nav class="gap-4 flex justify-center items-center">
                        <a href="<?php echo e(route('user.settings')); ?>"
                            class="py-2 px-4 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-indigo-600 text-neutral-200 hover:bg-indigo-700 focus:outline-hidden focus:bg-blue-700"
                            wire:navigate>
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 5v14m8-7h-2m0 0h-2m2 0v2m0-2v-2M3 11h6m-6 4h6m11 4H4c-.55228 0-1-.4477-1-1V6c0-.55228.44772-1 1-1h16c.5523 0 1 .44772 1 1v12c0 .5523-.4477 1-1 1Z" />
                            </svg>
                            Manage Blogs
                        </a>
                        <a href="<?php echo e(route('user.settings')); ?>"
                            class="py-2 px-4 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-gray-800 text-neutral-200 hover:bg-gray-700 focus:outline-hidden focus:bg-blue-700"
                            wire:navigate>
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                            </svg>
                            Edit Profile
                        </a>
                    </nav>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>


        </section>

    </main>
</header>
<?php /**PATH C:\Users\Rando\Programming Workspaces\laravel-workspace\Quickpost\resources\views/livewire/pages/user/profile/header.blade.php ENDPATH**/ ?>