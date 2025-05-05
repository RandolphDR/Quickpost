<div class="w-full bg-gray-100 dark:bg-zinc-800 p-4 gap-4 flex flex-col justify-center items-center rounded-lg">
    <header class="w-full flex justify-between items-center">
        <div class="w-full gap-2 flex justify-start items-center">
            <img src="{{ asset($comment->user->avatar) }}" alt="avatar" class="rounded-full w-10 h-10 bg-gray-400">
            <div class="flex flex-col justify-center items-start">
                <a href="{{ route('user.profile', ['username' => $comment->user->username]) }}"
                    class="text-gray-900 dark:text-neutral-200 text-sm hover:text-blue-700 dark:hover:text-blue-500 hover:underline"
                    title="View Profile" wire:navigate>
                    {{ $comment->user->fullname }}
                </a>

                <time datetime="{{ $isoTime }}" class="text-gray-600 dark:text-gray-400 text-xs">
                    {{ $timeDisplay }}
                </time>
            </div>
        </div>
        @if (Gate::allows('manage-post', $post) || (Auth::check() && $comment->user->id === auth()->user()->id))
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button type="button">
                        <svg class="w-6 h-6 text-gray-900 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M12 6h.01M12 12h.01M12 18h.01" />
                        </svg>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-comment-deletion-{{ $comment->id }}')">
                        Delete
                    </x-dropdown-link>
                </x-slot>
            </x-dropdown>
        @endif
    </header>
    <section class="w-full">
        <p class="text-gray-900 dark:text-neutral-200 text-sm">
            {{ $comment->body }}
        </p>
    </section>

    <x-modal name="confirm-comment-deletion-{{ $comment->id }}" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Delete Comment
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Are you sure you want to delete this comment? This action cannot be undone.
            </p>

            <div class="mt-6 flex justify-end gap-4">
                <x-secondary-button x-on:click="$dispatch('close')">
                    Cancel
                </x-secondary-button>

                <x-danger-button wire:click="deleteComment({{ $comment->id }})" x-on:click="$dispatch('close')">
                    Delete Comment
                </x-danger-button>
            </div>
        </div>
    </x-modal>
</div>
