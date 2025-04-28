<section class="w-full h-full overflow-hidden relative">
    <!-- Gradients -->
    <div aria-hidden="true" class="w-full flex absolute -top-96 start-1/2 transform -translate-x-1/2 z-0">
        <div
            class="bg-gradient-to-r from-violet-300/50 to-purple-100 blur-3xl w-[500px] h-[500px] rotate-[-60deg] transform -translate-x-40 dark:from-violet-900/50 dark:to-purple-900">
        </div>
        <div
            class="bg-gradient-to-tl from-blue-50 via-blue-100 to-blue-50 blur-3xl w-[1440px] h-[600px] rounded-full origin-top-left -rotate-12 -translate-x-60 dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-blue-900/70">
        </div>
    </div>
    <!-- End Gradients -->

    <div class="relative py-16">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
            <div class="max-w-2xl text-center mx-auto">
                <p class="text-sm font-medium text-gray-600 dark:text-[#7592ff]">
                    LARAVEL LIVEWIRE ⨯ TAILWIND CSS
                </p>

                <!-- Title -->
                <div class="mt-5 max-w-2xl">
                    <h1
                        class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
                        Create and Post Instantly.
                    </h1>
                </div>
                <!-- End Title -->

                <div class="mt-10 max-w-3xl">
                    <p class="text-lg text-gray-600 dark:text-neutral-400">
                        Share your stories, ideas, and updates effortlessly. QuickPost lets you publish blogs
                        instantly — connecting you with your audience the moment inspiration hits.
                    </p>
                </div>

                <!-- Buttons -->
                <div class="mt-8 gap-3 flex justify-center">
                    <a href="{{ route('login') }}"
                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                        wire:navigate>
                        CREATE YOUR BLOG
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
                <!-- End Buttons -->
            </div>
        </div>
    </div>
</section>
