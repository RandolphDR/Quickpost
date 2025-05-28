<form wire:submit="updateCategory" class="w-full gap-4 flex flex-col justify-center items-center">
    <header class="w-full flex justify-between items-center bg-white dark:bg-gray-800 shadow-md rounded-xl">
        <aside class="p-4 gap-2 flex justify-center items-center">
            <h1 class="text-lg  text-gray-800 dark:text-neutral-200 font-medium">
                Editing Category: {{ $name }}
            </h1>
        </aside>
        <nav class="p-4 gap-2 flex justify-center items-center">
            <button type="button" onclick="window.history.back()"
                class="group border border-gray-300 dark:border-gray-600 rounded-lg py-1 px-2 gap-1 inline-flex items-center text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 text-sm font-medium transition-colors duration-150">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
                Exit
            </button>
            <button type="button"
                x-on:click.prevent="$dispatch('open-modal', 'confirm-category-deletion-{{ $category->id }}')"
                class="bg-red-600 hover:bg-red-500 active:bg-red-700 text-white rounded-lg py-1 px-2 gap-1 inline-flex items-center text-sm font-medium transition-colors duration-150">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                        clip-rule="evenodd" />
                </svg>
                Delete Category
            </button>
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-500 active:bg-blue-700 text-white rounded-lg py-1 px-2 gap-1 inline-flex items-center text-sm font-medium transition-colors duration-150">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m10.051 8.102-3.778.322-1.994 1.994a.94.94 0 0 0 .533 1.6l2.698.316m8.39 1.617-.322 3.78-1.994 1.994a.94.94 0 0 1-1.595-.533l-.4-2.652m8.166-11.174a1.366 1.366 0 0 0-1.12-1.12c-1.616-.279-4.906-.623-6.38.853-1.671 1.672-5.211 8.015-6.31 10.023a.932.932 0 0 0 .162 1.111l.828.835.833.832a.932.932 0 0 0 1.111.163c2.008-1.102 8.35-4.642 10.021-6.312 1.475-1.478 1.133-4.77.855-6.385Zm-2.961 3.722a1.88 1.88 0 1 1-3.76 0 1.88 1.88 0 0 1 3.76 0Z" />
                </svg>
                Save Changes
            </button>
        </nav>
    </header>
    <main
        class="w-full p-4 gap-4 flex flex-col justify-center items-center bg-white dark:bg-gray-800 shadow-md rounded-xl">
        <section class="w-full">
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-white mb-1">
                Category Name*
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Category Name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </section>
        <section class="w-full">
            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-white mb-1">
                Description
            </label>
            <textarea id="body" rows="3" wire:model="description"
                class="leading-relaxed tracking-wide resize-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Body"></textarea>
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </section>
    </main>
    <x-modal name="confirm-category-deletion-{{ $category->id }}" focusable>
        <div class="p-6">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                Delete Category
            </h2>

            <div class="mt-4 space-y-3">
                <p class="text-sm text-gray-700 dark:text-gray-300">
                    Are you sure you want to delete this category? This action is permanent and
                    cannot be undone.
                </p>
                <p class="text-sm text-red-600 dark:text-red-400 font-medium">
                    <span class="font-semibold">Warning:</span> All blog posts associated with this
                    category will be affected.
                </p>
            </div>

            <div class="mt-6 flex justify-end gap-4">
                <x-secondary-button x-on:click="$dispatch('close')">
                    Cancel
                </x-secondary-button>

                <x-danger-button wire:click="deleteCategory('{{ $category->id }}')" x-on:click="$dispatch('close')">
                    Confirm Deletion
                </x-danger-button>
            </div>
        </div>
    </x-modal>
</form>
