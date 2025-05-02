<x-app-layout>
    <section class="w-full min-h-screen p-6 flex flex-col items-center gap-6">
        <h1 class="font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
            Your Profile Page
        </h1>
        <p class="text-gray-800 dark:text-neutral-200">Profile Summary</p>
        <p class="text-gray-800 dark:text-neutral-200">Total Posts: {{ Auth::user()->posts->count() }}</p>

        <div class="w-full max-w-4xl flex flex-col gap-4">
            @forelse(Auth::user()->posts as $post)
                <article class="p-4 border rounded-lg shadow-sm bg-white dark:bg-neutral-800">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-100">{{ $post->title }}</h2>
                    <p class="mt-2 text-gray-700 dark:text-neutral-300">{{ $post->description }}</p>
                    <p class="mt-2 text-sm text-blue-600 dark:text-blue-400">Likes: {{ $post->likes->count() }}</p>

                    <div class="mt-4">
                        <h3 class="text-sm font-semibold text-gray-800 dark:text-neutral-200">Comments:</h3>
                        @forelse($post->comments as $comment)
                            <div class="mt-1 pl-2 border-l border-gray-300 dark:border-gray-600">
                                <p class="text-gray-700 dark:text-neutral-300 text-sm">
                                    <span class="font-medium">{{ $comment->user->name }}:</span>
                                    {{ $comment->body }}
                                </p>
                            </div>
                        @empty
                            <p class="text-sm text-gray-500 dark:text-gray-400">No comments yet.</p>
                        @endforelse
                    </div>
                </article>
            @empty
                <p class="text-gray-600 dark:text-neutral-400">You haven't posted anything yet.</p>
            @endforelse
        </div>
    </section>
</x-app-layout>
