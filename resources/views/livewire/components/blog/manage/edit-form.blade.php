<form class="w-full gap-4 flex flex-col justify-center items-center" enctype="multipart/form-data"
    wire:submit="updatePosts">
    @if ($post->status === 'draft')
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 px-4 py-2 rounded">
            <strong>Note:</strong> This post is currently in <span class="font-semibold">Draft</span> status and not
            visible to public users.
        </div>
    @endif
    <header class="w-full bg-white dark:bg-gray-800 shadow-md rounded-xl">
        <div class="py-3 px-4 flex justify-between items-center">
            <aside class="w-1/2">
                <input type="text" wire:model="title"
                    class="w-full text-xl text-gray-800 dark:text-neutral-300 font-medium bg-transparent border-0 border-b border-gray-300 dark:border-neutral-600 focus:border-gray-800 dark:focus:border-neutral-300 outline-none focus:ring-0"
                    placeholder="Untitled Blog">
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </aside>
            <nav class="gap-2 flex justify-center items-center">
                <button onclick="event.preventDefault(); window.history.back();"
                    class="border border-gray-300 dark:border-gray-600 rounded-lg py-1 px-2 gap-1 inline-flex items-center text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 text-sm font-medium transition-colors duration-150">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12l4-4m-4 4 4 4" />
                    </svg>
                    Exit
                </button>
                <a href="{{ route('blog.view', $post->slug) }}"
                    class="border border-gray-300 dark:border-gray-600 rounded-lg py-1 px-2 gap-1 inline-flex items-center text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 text-sm font-medium transition-colors duration-150"
                    wire:navigate>
                    <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2"
                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                        <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    View Post
                </a>
                <button type="button"
                    x-on:click.prevent="$dispatch('open-modal', 'confirm-post-deletion-{{ $post->id }}')"
                    class="bg-red-600 hover:bg-red-500 active:bg-red-700 text-white rounded-lg py-1 px-2 gap-1 inline-flex items-center text-sm font-medium transition-colors duration-150">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                            clip-rule="evenodd" />
                    </svg>
                    Delete Blog Post
                </button>
                @if ($post->status === 'draft')
                    <button type="button"
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-publish-post-{{ $post->id }}')"
                        class="border border-gray-300 dark:border-gray-600 rounded-lg py-1 px-2 gap-1 inline-flex items-center text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 text-sm font-medium transition-colors duration-150">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                        Publish Post
                    </button>
                @endif
                <button type="button"
                    x-on:click.prevent="$dispatch('open-modal', 'confirm-save-changes-{{ $post->id }}')"
                    class="bg-blue-600 hover:bg-blue-500 active:bg-blue-700 text-white rounded-lg py-1 px-2 gap-1 inline-flex items-center text-sm font-medium transition-colors duration-150">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m10.051 8.102-3.778.322-1.994 1.994a.94.94 0 0 0 .533 1.6l2.698.316m8.39 1.617-.322 3.78-1.994 1.994a.94.94 0 0 1-1.595-.533l-.4-2.652m8.166-11.174a1.366 1.366 0 0 0-1.12-1.12c-1.616-.279-4.906-.623-6.38.853-1.671 1.672-5.211 8.015-6.31 10.023a.932.932 0 0 0 .162 1.111l.828.835.833.832a.932.932 0 0 0 1.111.163c2.008-1.102 8.35-4.642 10.021-6.312 1.475-1.478 1.133-4.77.855-6.385Zm-2.961 3.722a1.88 1.88 0 1 1-3.76 0 1.88 1.88 0 0 1 3.76 0Z" />
                    </svg>
                    Save Changes
                </button>
            </nav>
        </div>
    </header>

    <main class="w-full gap-4 flex justify-center items-stretch">
        <aside
            class="w-1/3 p-4 gap-4 flex flex-col justify-start items-center bg-white dark:bg-gray-800 shadow-md rounded-xl">
            <label for="cover_image"
                class="flex flex-col items-center justify-center w-full h-64 rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 cursor-pointer transition-colors hover:bg-gray-100 hover:border-gray-400 dark:bg-gray-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:border-gray-500">
                @if ($newCoverImage)
                    <div class="relative w-full h-64">
                        <img src="{{ $newCoverImage->temporaryUrl() }}" alt="New cover preview"
                            class="w-full h-64 object-cover rounded-xl">
                        <div class="absolute bottom-0 left-0 right-0 bg-black/50 text-white p-2 text-sm truncate">
                            {{ $newCoverImage->getClientOriginalName() }}
                        </div>
                    </div>
                @elseif($existingCoverImage)
                    <div class="relative w-full h-64">
                        <img src="{{ asset($existingCoverImage) }}" alt="Current cover"
                            class="w-full h-64 object-cover rounded-xl">
                        <div class="absolute bottom-0 left-0 right-0 bg-black/50 text-white p-2 text-sm truncate">
                            {{ basename($existingCoverImage) }}
                        </div>
                    </div>
                @else
                    <div class="flex flex-col items-center justify-center px-4 pt-5 pb-6 text-center">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" fill="none" viewBox="0 0 20 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                            <span class="font-semibold">Click to upload 'Cover Image'</span> or drag and drop
                        </p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">
                            JPG, PNG, JPEG (Max. 10MB)
                        </p>
                    </div>
                @endif
                <input id="cover_image" type="file" accept="image/*" wire:model="newCoverImage"
                    class="hidden" />
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </label>

            <section class="w-full flex flex-col justify-start items-center">
                <select wire:model.defer="category_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled>Select a category</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" {{ $cat->id == $category_id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </section>
            <x-input-error class="mt-2" :messages="$errors->get('category_id')" />
        </aside>

        <section class="w-3/4 p-4 flex flex-col gap-4 bg-white dark:bg-gray-800 shadow-md rounded-xl">
            <section class="w-full">
                <label for="short_description" class="block text-sm font-medium text-gray-700 dark:text-white mb-1">
                    Short Description
                </label>
                <input type="text" id="short_description" wire:model.defer="short_description"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Short Description" required />
                <x-input-error class="mt-2" :messages="$errors->get('short_description')" />
            </section>

            <section class="w-full">
                <label for="body"
                    class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Body</label>
                <textarea id="body" rows="20" wire:model.defer="body"
                    class="leading-relaxed tracking-wide resize-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Body" required></textarea>
                <x-input-error class="mt-2" :messages="$errors->get('body')" />
            </section>
        </section>
    </main>

    @if ($post->status === 'draft')
        <x-modal name="confirm-publish-post-{{ $post->id }}" focusable>
            <div class="p-6">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                    Publish Blog Post
                </h2>

                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    Are you sure you want to publish this blog post? This action cannot be undone.
                </p>

                <div class="mt-6 flex justify-end gap-4">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        Cancel
                    </x-secondary-button>

                    <x-danger-button wire:click.prevent="publish" x-on:click="$dispatch('close')">
                        Publish Blog Post
                    </x-danger-button>
                </div>
            </div>
    @endif
    </x-modal>

    <x-modal name="confirm-save-changes-{{ $post->id }}" focusable>
        <div class="p-6">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                Save Changes
            </h2>

            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                Do you want to save your changes? this action cannot be undone
            </p>

            <div class="mt-6 flex justify-end gap-4">
                <x-secondary-button x-on:click="$dispatch('close')">
                    Cancel
                </x-secondary-button>

                <x-danger-button wire:click.prevent="saveChanges" x-on:click="$dispatch('close')">
                    Save Changes
                </x-danger-button>
            </div>
        </div>
    </x-modal>

    <x-modal name="confirm-post-deletion-{{ $post->id }}" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Delete Blog Post
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Are you sure you want to delete this blogpost? This action cannot be undone.
            </p>

            <div class="mt-6 flex justify-end gap-4">
                <x-secondary-button x-on:click="$dispatch('close')">
                    Cancel
                </x-secondary-button>

                <x-danger-button wire:click.prevent="deletePost('{{ $post->id }}')"
                    x-on:click="$dispatch('close')">
                    Delete Blogpost
                </x-danger-button>
            </div>
        </div>
    </x-modal>
</form>
