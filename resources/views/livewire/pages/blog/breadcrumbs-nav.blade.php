<nav class="w-full px-3 py-2 flex flex-row justify-between items-center bg-white dark:bg-gray-800">
    <button onclick="event.preventDefault(); window.history.back();"
        class="group py-1 px-2 gap-1.5 inline-flex items-center text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 text-sm font-medium transition-colors duration-150">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 12h14M5 12l4-4m-4 4 4 4" />
        </svg>
        Back
    </button>

    <div class="flex items-center bg-gray-100 dark:bg-gray-700 rounded-lg px-3 py-1.5 space-x-2 text-sm">
        <a href="{{ route('explore') }}"
            class="text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 transition-colors"
            wire:navigate>
            Explore
        </a>
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m10 16 4-4-4-4" />
        </svg>
        <a href="#"
            class="text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 transition-colors"
            wire:navigate>
            {{ $post->category->name }}
        </a>
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m10 16 4-4-4-4" />
        </svg>
        <span class="text-blue-600 dark:text-blue-400 font-medium">
            {{ $post->title }}
        </span>
    </div>

    <div>
        @if (Gate::allows('manage-post', $post) || (Auth::check() && $post->user->id === auth()->user()->id))
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button type="button"
                        class="py-1.5 px-3 gap-1.5 inline-flex items-center rounded-md border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 text-sm font-medium transition-colors duration-150">
                        <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        Manage this Blog
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link class="text-sm px-3 py-1.5 hover:bg-gray-100 dark:hover:bg-gray-700">
                        Edit
                    </x-dropdown-link>
                    <x-dropdown-link
                        class="text-sm px-3 py-1.5 text-red-600 dark:text-red-400 hover:bg-gray-100 dark:hover:bg-gray-700">
                        Delete
                    </x-dropdown-link>
                </x-slot>
            </x-dropdown>
        @endif
    </div>
</nav>
