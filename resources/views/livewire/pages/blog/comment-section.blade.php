<section class="w-full gap-4 flex flex-col justify-center items-center">
    <div class="w-full gap-4 flex">
        <p class="text-sm text-gray-500 dark:text-gray-400">👍 {{ $post->likes->count() }} Likes</p>
        <p class="text-sm text-gray-500 dark:text-gray-400">💬 {{ $post->comments->count() }} Comments</p>
    </div>

    <div class="w-full max-h-96 overflow-x-auto gap-4 flex flex-col justify-start items-center scrollbar-custom">
        @if ($post->comments->isNotEmpty())
            @foreach ($post->comments as $comment)
                <livewire:components.blog.blogpost-comment :comment="$comment" :post="$post"
                    wire:key="comment-{{ $comment->id }}" lazy />
            @endforeach
        @else
            <div class="w-full p-6 bg-gray-100 dark:bg-zinc-800 rounded-2xl shadow text-center">
                <p class="text-gray-500 dark:text-neutral-200 text-base">
                    No comments on this blog post yet.
                </p>
            </div>
        @endif
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
        <div class="w-full p-6 bg-gray-100 dark:bg-zinc-800 rounded-2xl shadow text-center">
            <p class="text-gray-600 dark:text-gray-300 text-base">
                Please
                <a href="{{ route('login') }}"
                    class="text-blue-700 dark:text-indigo-400 border-b-2 border-transparent hover:border-blue-700 dark:hover:border-indigo-400 transition">
                    login
                </a>
                to post a comment.
            </p>

        </div>
    @endauth
</section>
