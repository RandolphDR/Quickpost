<div class="w-full">
    <div wire:loading.flex class="col-span-full gap-2 flex flex-col items-center justify-center py-4">
        <div class="flex flex-row gap-2">
            <div class="w-3 h-3 rounded-full bg-blue-600 animate-bounce [animation-delay:.1s]"></div>
            <div class="w-3 h-3 rounded-full bg-blue-600 animate-bounce [animation-delay:.3s]"></div>
            <div class="w-3 h-3 rounded-full bg-blue-600 animate-bounce [animation-delay:.5s]"></div>
        </div>
        <p class="text-gray-600 dark:text-neutral-400">
            Please wait while we load more categories...
        </p>
    </div>

    <div wire:loading.remove>
        <div class="rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-300 dark:bg-gray-700 rounded-t-lg">
                    <tr>
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            ID
                        </th>
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Category Name
                        </th>
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Description
                        </th>
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Created At
                        </th>
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Last Updated At
                        </th>
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($allCategories as $category)
                        <tr>
                            <td class="px-4 py-4 text-sm text-gray-900 dark:text-neutral-200">{{ $category->id }}</td>
                            <td class="px-4 py-2 text-sm font-semibold text-blue-700 dark:text-blue-400">
                                {{ $category->name }}
                            </td>
                            <td class="max-w-52 px-4 py-4 text-sm text-gray-900 dark:text-neutral-200">
                                {{ $category->description ?? 'No Description Set' }}</td>
                            <td class="px-4 py-4 text-sm text-gray-900 dark:text-neutral-200">
                                {{ $category->created_at->format('F j, Y \a\t g:i a') }}
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-900 dark:text-neutral-200">
                                {{ $category->updated_at->format('F j, Y \a\t g:i a') }}
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
                                        <x-dropdown-link>
                                            Edit
                                        </x-dropdown-link>
                                        <x-dropdown-link
                                            x-on:click.prevent="$dispatch('open-modal', 'confirm-category-deletion-{{ $category->id }}')">
                                            Delete
                                        </x-dropdown-link>
                                    </x-slot>
                                </x-dropdown>
                            </td>
                        </tr>
                        <x-modal name="confirm-category-deletion-{{ $category->id }}" focusable>
                            <div class="p-6">
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    Delete Category
                                </h2>

                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                    Are you sure you want to delete this category? This action cannot be undone.
                                </p>

                                <div class="mt-6 flex justify-end gap-4">
                                    <x-secondary-button x-on:click="$dispatch('close')">
                                        Cancel
                                    </x-secondary-button>

                                    <x-danger-button wire:click="deleteCategory('{{ $category->id }}')"
                                        x-on:click="$dispatch('close')">
                                        Delete Category
                                    </x-danger-button>
                                </div>
                            </div>
                        </x-modal>
                    @endforeach
                </tbody>
            </table>
        </div>
        <nav class="mt-8 w-full">
            {{ $allCategories->links('vendor.livewire.tailwind') }}
        </nav>
    </div>
</div>
