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
                        class="w-32 h-32 rounded-full bg-gray-400 border-2 border-white shadow-lg">
                    <span class="text-center">
                        <h3 class="text-gray-900 dark:text-neutral-200 text-xl gap-1 flex items-center">
                            <?php echo e($user->fullname); ?>

                            <!--[if BLOCK]><![endif]--><?php if($user->is_verified): ?>
                                <svg class="w-4 h-4 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                                </svg>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm"><?php echo e('@' . $user->username); ?></p>
                    </span>

                </div>
            </div>
            <div class="w-full relative flex justify-between items-center p-4">
                <div class="gap-4 flex justify-center items-center">

                </div>
                <!--[if BLOCK]><![endif]--><?php if(Gate::allows('user-access') && $user->id === auth()->user()->id): ?>
                    <nav class="gap-4 flex justify-center items-center">
                        <a href="<?php echo e(route('user.settings')); ?>" class="py-2 px-4 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" wire:navigate>
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5v14m8-7h-2m0 0h-2m2 0v2m0-2v-2M3 11h6m-6 4h6m11 4H4c-.55228 0-1-.4477-1-1V6c0-.55228.44772-1 1-1h16c.5523 0 1 .44772 1 1v12c0 .5523-.4477 1-1 1Z"/>
                            </svg>
                            Manage Blogs
                        </a>
                        <a href="<?php echo e(route('user.settings')); ?>" class="py-2 px-4 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-gray-800 text-white hover:bg-gray-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" wire:navigate>
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
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