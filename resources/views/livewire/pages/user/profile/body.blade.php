<div>
    @if ($user->role === 'administrator' || $user->role === 'developer')
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
        @if (Auth::check() && $username === Auth::user()->username)
            <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
                <nav class="flex space-x-4">
                    <x-nav-link>
                        Published
                    </x-nav-link>

                    <x-nav-link>
                        Drafts
                    </x-nav-link>

                    <x-nav-link>
                        Trashed
                    </x-nav-link>
                </nav>
            </div>
        @endif
        <livewire:pages.blog.all :username="$username" />
    @endif
</div>
