<div class="relative w-52">
    <form class="w-full flex items-center" @submit.prevent>
        <label for="search" class="absolute ml-2 z-20 top-3 left-2 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd" />
            </svg>
        </label>

        <input type="text" wire:model.live="query" id="search" autocomplete="off"
            class="h-11 w-full pl-9 rounded-lg border border-gray-200 bg-white/50 dark:bg-dark-900 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-800 dark:bg-gray-900 dark:bg-white/[0.03] dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
            placeholder="Search Blogpost" />

        @if (strlen($query) > 1)
            <ul
                class="absolute top-full left-0 z-30 mt-2 max-h-60 w-full overflow-x-auto rounded-md border border-gray-300 bg-white shadow-lg dark:border-gray-700 dark:bg-gray-800 scrollbar-custom">
                @forelse($results as $result)
                    <li>
                        <a href="{{ route('blog.view', ['slug' => $result['slug']]) }}"
                            class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            wire:navigate>
                            {{ $result['title'] }}
                        </a>
                    </li>
                @empty
                    <li class="px-4 py-2 text-sm text-gray-500">No results found.</li>
                @endforelse
            </ul>
        @endif
    </form>
</div>
