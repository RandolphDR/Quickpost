<div class="w-full px-4 py-4 gap-4 flex flex-col justify-start items-center">
    @can('manage-post', $post)
        <button class="text-gray-900 dark:text-neutral-200">Edit This Blog Article</button>
    @endcan
    <figure class="w-full max-h-96 rounded-lg overflow-hidden flex justify-center items-center">
        @if ($post->cover_image)
            <img src="{{ asset($post->cover_image) }}" alt="error" class="h-full object-cover object-center">
        @else
            <div class="w-full rounded-lg gap-2 flex flex-col justify-center items-center">
                <img src="{{ asset('images/no-background.png') }}" alt="error" class="w-1/3">
                <h1 class="text-black dark:text-neutral-200 text-xl font-medium">No Cover
                    Image Found
                </h1>
            </div>
        @endif
    </figure>

    <!-- Header Section -->
    <header class="w-full gap-4 flex flex-col justify-center items-start">
        <div class="w-full gap-2 flex justify-start items-center">
            <span class="flex justify-center items-center gap-2">
                <img src="{{ asset($post->user->avatar) }}" alt="error" class="rounded-full w-7 h-7 bg-gray-400">
                <p class="text-gray-600 dark:text-gray-400 text-sm">
                    {{ $post->user->fullname }}
                </p>
            </span>
            <p class="text-indigo-600 text-3xl">•</p>
            <p class="text-gray-600 dark:text-gray-400 text-sm">
                {{ $post->created_at->format('d F Y') }}
            </p>
        </div>
        <h1 class="text-4xl font-semibold text-gray-900 dark:text-neutral-100">{{ $post->title }}</h1>
    </header>

    <!-- Main Content -->
    <article class="w-full">
        <p class="text-gray-900 dark:text-neutral-200">{{ $post->body }}</p>
    </article>

    <hr class="w-full my-2 border-gray-700 dark:border-neutral-200">

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
                            <img src="{{ asset($comment->user->avatar) }}" alt="error"
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
                                    <button type="button" class="">
                                        <svg class="w-6 h-6 text-gray-900 dark:text-neutral-200 font-medium"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                d="M12 6h.01M12 12h.01M12 18h.01" />
                                        </svg>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link>
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
    </section>

    <hr class="w-full my-2 border-gray-700 dark:border-neutral-200">

    <section class="w-full">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-neutral-100">Leave A Comment (Coming Soon)</h1>

    </section>
</div>
