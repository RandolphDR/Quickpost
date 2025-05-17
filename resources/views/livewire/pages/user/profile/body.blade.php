<div>
    @if($user->role === 'administrator' || $user->role === 'developer')
        <main class="rounded-lg w-full bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl">
                    Welcome to my Profile
                </h1>
                <p class="mt-4 text-lg leading-6 text-indigo-100">
                    Explore insights, projects, and innovations from our QuickPost developers.
                </p>
            </div>
        </main>
    @else
        <livewire:pages.blog.all :username="$username" />
    @endif
</div>
