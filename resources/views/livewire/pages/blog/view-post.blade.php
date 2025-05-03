<div class="max-w-4xl mx-auto px-4 py-8">
    <!-- Header Section -->
    <header class="mb-8 text-center">
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-neutral-100">{{ $post->title }}</h1>
        <p class="mt-2 text-lg text-gray-600 dark:text-gray-400">By {{ $post->user->fullname }} |
            {{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('F d, Y') : 'Unpublished' }}</p>
    </header>

    <!-- Cover Image -->
    @if ($post->cover_image)
        <figure class="mb-8">
            <img src="{{ asset($post->cover_image) }}" alt="Cover Image" class="w-full h-auto rounded-lg shadow-lg">
        </figure>
    @endif

    <!-- Short Description -->
    <section class="mb-8">
        <p class="text-lg text-gray-700 dark:text-gray-300">{{ $post->short_description }}</p>
    </section>

    <!-- Main Content -->
    <article class="mb-12">
        <p class="text-gray-900 dark:text-neutral-200">{{ $post->body }}</p>
    </article>

    <!-- Likes and Comments Section -->
    <section class="mb-12">
        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
            <span class="mr-4">👍 {{ $post->likes->count() }} Likes</span>
            <span>💬 {{ $post->comments->count() }} Comments</span>
        </div>

        <!-- Comments List -->
        <div class="space-y-6">
            @forelse ($post->comments as $comment)
                <div class="p-4 rounded-lg bg-gray-100 dark:bg-gray-800">
                    <p class="text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $comment->user->fullname }}</p>
                    <p class="text-gray-700 dark:text-gray-300">{{ $comment->body }}</p>
                </div>
            @empty
                <p class="text-gray-600 dark:text-gray-400">No comments yet. Be the first to comment!</p>
            @endforelse
        </div>
    </section>
</div>
