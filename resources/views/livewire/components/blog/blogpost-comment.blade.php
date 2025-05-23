<div class="w-full bg-gray-100 dark:bg-zinc-800 p-4 gap-4 flex flex-col justify-center items-center rounded-lg">
    <header class="w-full flex justify-between items-center">
        <div class="w-full gap-2 flex justify-start items-center">
            <img src="{{ asset($comment->user->avatar) }}" alt="avatar" class="rounded-full w-10 h-10 bg-gray-400">
            <div class="flex flex-col justify-center items-start">
                <a href="{{ route('user.profile', ['username' => $comment->user->username]) }}"
                    class="gap-1 flex items-center text-gray-900 dark:text-neutral-200 text-sm hover:text-blue-700 dark:hover:text-blue-500 hover:underline"
                    title="View Profile" wire:navigate>
                    {{ $comment->user->fullname }}
                    @if ($comment->user->is_verified)
                        <span class="cursor-help" title="Verified User">
                            <svg class="w-4 h-4 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    @endif
                </a>

                <time datetime="{{ $isoTime }}" class="text-gray-600 dark:text-gray-400 text-xs">
                    {{ $timeDisplay }}
                </time>
            </div>
        </div>
        @if (Gate::allows('manage-post', $comment->post) || (Auth::check() && $comment->user->id === auth()->user()->id))
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
