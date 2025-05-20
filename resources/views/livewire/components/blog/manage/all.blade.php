<div class="w-full overflow-x-auto">

    <!-- Loading State -->
    <div wire:loading.flex class="w-full py-10 flex flex-col items-center justify-center gap-2">
        <svg class="animate-spin h-8 w-8 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
            </circle>
            <path class="opacity-75" fill="currentColor"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
            </path>
        </svg>
        <p class="text-gray-600 dark:text-neutral-400">Please wait while we load the posts...</p>
    </div>

    <!-- Table -->
    <div wire:loading.remove>
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-100 dark:bg-gray-700">
                <tr>
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        ID
                    </th>
                    @can('administrator-access')
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Owner
                        </th>
                    @endcan
                    @can('user-access')
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Category
                        </th>
                    @endcan
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Title
                    </th>
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Status</th>
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Published At</th>
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Created At</th>
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Last Updated</th>
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($allPosts as $post)
                    <tr>
                        <td class="px-4 py-4 text-sm text-gray-900 dark:text-neutral-200">{{ $post->id }}</td>
                        @can('administrator-access')
                            <td class="px-4 py-4">
                                <div class="gap-2 flex justify-center items-center">
                                    <img src="{{ asset($post->user->avatar) }}" alt="avatar"
                                        class="rounded-full w-10 h-10 bg-gray-400">
                                    <span class="min-w-0 flex-1">
                                        <p
                                            class="text-gray-900 dark:text-neutral-200 text-sm truncate gap-1 flex items-center">
                                            {{ $post->user->fullname }}
                                            @if ($post->user->is_verified)
                                                <svg class="w-4 h-4 text-blue-600" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @endif
                                        </p>
                                        <p class="text-gray-600 dark:text-gray-400 text-xs truncate max-w-[200px]">
                                            {{ $post->user->email }}
                                        </p>
                                    </span>
                                </div>
                            </td>
                        @endcan
                        @can('user-access')
                            <td class="px-4 py-2 text-sm font-semibold text-blue-700 dark:text-blue-400">
                                {{ $post->category->name }}
                            </td>
                        @endcan
                        <td class="px-4 py-4 text-sm text-gray-900 dark:text-neutral-200">{{ $post->title }}</td>
                        <td class="px-4 py-4 text-sm">
                            @if ($post->status === 'published')
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                    Published
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                    Draft
                                </span>
                            @endif
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-900 dark:text-neutral-200">
                            {{ $post->published_at ? $post->published_at->format('F j, Y \a\t g:i a') : '—' }}
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-900 dark:text-neutral-200">
                            {{ $post->created_at->format('F j, Y \a\t g:i a') }}
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-900 dark:text-neutral-200">
                            {{ $post->updated_at->format('F j, Y \a\t g:i a') }}
                        </td>
                        <td class="">
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
                                    <x-dropdown-link :href="route('blog.view', ['slug' => $post->slug])" title="Read: {{ $post->title }}">
                                        View
                                    </x-dropdown-link>
                                    <x-dropdown-link :href="route('blog.edit', $post->slug)" title="Edit: {{ $post->title }}">
                                        Edit
                                    </x-dropdown-link>
                                    <x-dropdown-link>
                                        Delete
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <nav class="mt-8 w-full">
            {{ $allPosts->links('vendor.livewire.tailwind') }}
        </nav>
    </div>
</div>
