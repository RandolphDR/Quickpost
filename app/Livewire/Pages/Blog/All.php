<?php

namespace App\Livewire\Pages\Blog;

use Livewire\{Component, WithPagination};
use Illuminate\Support\Facades\{Auth, Gate};
use App\Models\{User, Post};

class All extends Component
{
    use WithPagination;

    public ?string $username = null;

    public function render()
    {
        $query = Post::query()->with('user'); // Eager load user relationship

        // Handle username filter
        if ($this->username) {
            $user = User::where('username', $this->username)->firstOrFail();
            $query->where('user_id', $user->id);
        }

        // Apply status filters based on permissions
        if (!Gate::allows('manage-posts')) {
            $query->where('status', 'published');

            // If viewing specific user's posts, ensure they're published
            if ($this->username && Auth::check() && Auth::user()->is($user)) {
                $query->orWhere('user_id', Auth::id());
            }
        }

        $posts = $query->latest()
            ->paginate(10)
            ->withQueryString();

        return view('livewire.pages.blog.all', [
            'allPosts' => $posts,
        ]);
    }
}
