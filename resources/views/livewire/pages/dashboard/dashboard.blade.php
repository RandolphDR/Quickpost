<div class="w-full gap-4 flex flex-col justify-center items-center">
    <header class="w-full gap-2 flex flex-col py-2">
        <p class="text-gray-600 dark:text-gray-400">{{ $dateToday }}</p>
        <h1 class="text-4xl text-gray-800 dark:text-neutral-200">
            Good Morning, <strong>{{ Auth::user()->firstname }}!</strong>
        </h1>
    </header>

    <hr class="w-full border-gray-300 dark:border-gray-600">

    <section class="w-full gap-4 flex flex-col py-2">
        <header class="w-full gap-2 flex flex-col ">
            <h1 class="text-gray-800 dark:text-neutral-200 font-medium">
                Overview of your Dashboard
            </h1>
        </header>
        <div class="w-full gap-5 flex">
            <div
                class="w-[300px] gap-4 p-4 flex flex-col justify-start bg-white/70 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="w-full flex justify-between items-center">
                    <div class="w-10 h-10 p-2 rounded-lg bg-gray-100 dark:bg-gray-700 flex justify-center items-center">
                        <svg class="w-6 h-6 text-gray-700 dark:text-neutral-100" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                        </svg>
                    </div>
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button type="button">
                                <svg class="w-6 h-6 text-gray-900 dark:text-neutral-200"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M12 6h.01M12 12h.01M12 18h.01" />
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link>
                                View More
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>

                <div class="w-full flex justify-between items-center mt-2">
                    <div class="gap-1 flex flex-col">
                        <p class="text-sm text-blue-700 dark:text-blue-400">Total Users</p>
                        <h1 class="text-2xl font-semibold text-blue-700 dark:text-blue-400">{{ $totalUsers }}</h1>
                    </div>
                </div>

                <hr class="w-full my-2 border-gray-300 dark:border-gray-600">

                <div class="w-full flex flex-col gap-1 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-400">Developers</span>
                        <span class="text-gray-900 dark:text-neutral-100">{{ $totalDevelopers }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-400">Admins</span>
                        <span class="text-gray-900 dark:text-neutral-100">{{ $totalAdmins }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-400">Users</span>
                        <span class="text-gray-900 dark:text-neutral-100">{{ $totalRegularUsers }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-400">Trashed</span>
                        <span class="text-gray-900 dark:text-neutral-100">{{ $totalTrashUsers }}</span>
                    </div>
                </div>
            </div>
            <div
                class="w-[300px] gap-4 p-4 flex flex-col justify-start bg-white/70 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="w-full flex justify-between items-center">
                    <div class="w-10 h-10 p-2 rounded-lg bg-gray-100 dark:bg-gray-700 flex justify-center items-center">
                        <svg class="w-6 h-6 text-gray-700 dark:text-neutral-100" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z" />
                        </svg>
                    </div>
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button type="button">
                                <svg class="w-6 h-6 text-gray-900 dark:text-neutral-200"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M12 6h.01M12 12h.01M12 18h.01" />
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('admin.blog.manage')">
                                View More
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>

                <div class="w-full flex justify-between items-center mt-2">
                    <div class="gap-1 flex flex-col">
                        <p class="text-sm text-blue-700 dark:text-blue-400">Total Blogs</p>
                        <h1 class="text-2xl font-semibold text-blue-700 dark:text-blue-400">{{ $totalBlogs }}</h1>
                    </div>
                </div>

                <hr class="w-full my-2 border-gray-300 dark:border-gray-600">

                <div class="w-full flex flex-col gap-1 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-400">Published</span>
                        <span class="text-gray-900 dark:text-neutral-100">{{ $totalPublished }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-400">Drafts</span>
                        <span class="text-gray-900 dark:text-neutral-100">{{ $totalDrafts }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-400">Trashed</span>
                        <span class="text-gray-900 dark:text-neutral-100">{{ $totalTrashBlogs }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
