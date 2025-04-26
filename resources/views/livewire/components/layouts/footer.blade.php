<footer class="w-full bg-white dark:bg-gray-900">
    <div class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8">
        <div
            class="flex flex-col items-center gap-4 rounded-lg bg-indigo-600 p-6 shadow-lg sm:flex-row sm:justify-between">
            <strong class="text-xl text-white sm:text-xl"> Ready to start your posting journey? </strong>

            <a class="inline-flex items-center gap-2 rounded-full border border-white bg-white px-8 py-3 text-indigo-600 hover:bg-transparent hover:text-white focus:ring-3 focus:outline-hidden"
                href="">
                <span class="text-sm font-medium"> Start Posting with QuickPost </span>

                <svg class="size-5 shadow-sm rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>

        <div class="px-4 mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <div class="text-center sm:text-left">
                <a href="{{ route('homepage') }}" wire:navigate class="shrink-0 flex items-center">
                    <x-application-logo class="w-48" />
                </a>
            </div>

            <div class="text-center sm:text-left">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Quickpost</p>
                <ul class="mt-8 space-y-4 text-sm">
                    @guest
                        <li>
                            <a href="{{ route('login') }}"
                                class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                                Login
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}"
                                class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                                Register
                            </a>
                        </li>
                    @endguest
                    <li>
                        <a href="#"
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            About Us
                        </a>
                    </li>
                </ul>
            </div>

            <div class="text-center sm:text-left">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Blog Category</p>
                <ul class="mt-8 space-y-4 text-sm">
                    <li>
                        <a href="#"
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            Education
                        </a>
                    </li>
                    <li>
                        <a
                            href="#"class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            Technology
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            Lifestyle
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            Travel
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            Food
                        </a>
                    </li>
                </ul>
            </div>

            <div class="text-center sm:text-left">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Connect</p>
                <ul class="mt-8 space-y-4 text-sm">
                    <li>
                        <a href="#"
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-300">
                            FAQs
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mt-16 border-t border-gray-400 flex flex-col justify-center items-center p-4">
        {{-- class="mt-4 text-center text-sm text-gray-500 sm:mt-0 sm:text-center dark:text-gray-400" --}}
        <p class="font-outfit-sans text-center text-sm text-gray-500 dark:text-gray-400">
            &#169; {{ date('Y') }} {{ config('app.name') }}. Developed by {{ config('app.developer') }}
        </p>
    </div>
</footer>
