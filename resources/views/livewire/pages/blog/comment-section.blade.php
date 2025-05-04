<section class="w-full gap-4 flex flex-col justify-center items-center">
    <div class="w-full gap-4 flex">
        <p class="text-sm text-gray-500 dark:text-gray-400">👍 {{ $post->likes->count() }} Likes</p>
        <p class="text-sm text-gray-500 dark:text-gray-400">💬 {{ $post->comments->count() }} Comments</p>
    </div>

    <div class="w-full max-h-96 overflow-x-auto gap-4 flex flex-col justify-start items-center scrollbar-custom">
        @foreach ($post->comments as $comment)
            <div
                class="w-full bg-gray-100 dark:bg-zinc-800 p-4 gap-4 flex flex-col justify-center items-center rounded-lg">
                <header class="w-full flex justify-between items-center">
                    <div class="w-full gap-2 flex justify-start items-center">
                        <img src="{{ asset($comment->user->avatar) }}" alt="avatar"
                            class="rounded-full w-10 h-10 bg-gray-400">
                        <span>
                            <p class="text-gray-900 dark:text-neutral-200 text-sm">
                                {{ $comment->user->fullname }}
                            </p>
                            <p class="text-gray-600 dark:text-gray-400 text-xs">
                                {{ $comment->created_at->format('d F Y') }}
                            </p>
                        </span>
                    </div>
                    @if (Gate::allows('manage-post', $post) || (Auth::check() && $comment->user->id === auth()->user()->id))
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
                                <x-dropdown-link wire:click="deleteComment({{ $comment->id }})">
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
            </div>
        @endforeach
    </div>

    <hr class="w-full my-2 border-gray-700 dark:border-neutral-200">

    @auth
        <section class="w-full">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-neutral-100 mb-4">Leave A Comment</h1>

            <div class="w-full bg-gray-100 dark:bg-zinc-800 p-4 rounded-lg gap-4 flex flex-col">
                <div class="w-full gap-2 flex justify-start items-center">
                    <img src="{{ asset(auth()->user()->avatar) }}" alt="your avatar"
                        class="rounded-full w-10 h-10 bg-gray-400">
                    <span>
                        <p class="text-gray-900 dark:text-neutral-200 text-sm">
                            {{ auth()->user()->fullname }}
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 text-xs">
                            Posting as registered user
                        </p>
                    </span>
                </div>

                <form wire:submit.prevent="postComment" class="w-full">
                    <textarea wire:model="body"
                        class="w-full rounded-lg border-gray-300 dark:border-zinc-600 dark:bg-zinc-700
                           p-3 text-gray-900 dark:text-neutral-200 focus:ring-indigo-500 resize-none"
                        rows="4" placeholder="Write your comment as {{ Auth::user()->fullname }}..."></textarea>
                    <x-input-error :messages="$errors->get('body')" class="mt-2" />


                    <div class="mt-4 flex justify-end">
                        <x-primary-button>
                            {{ __('Post Comment') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </section>
    @else
        <div class="w-full text-center py-4">
            <p class="text-gray-600 dark:text-gray-400">
                Please <a href="{{ route('login') }}"
                    class="text-indigo-600 dark:text-indigo-400 hover:underline">login</a>
                to post a comment
            </p>
        </div>
    @endauth
</section>
