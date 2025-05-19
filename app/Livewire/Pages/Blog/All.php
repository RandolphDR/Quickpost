<?php

namespace App\Livewire\Pages\Blog;

use Livewire\{Component, WithPagination};
use Illuminate\Support\Facades\{Auth, Gate};
use App\Models\{User, Post};

class All extends Component
{
    use WithPagination;

    public ?string $username = null, $status = 'published';

    public function setStatus($status)
    {
        $this->status = $status;
        $this->resetPage();
    }

    public function render()
    {
        $query = Post::query()->with('user');

        if ($this->username) {
            $user = User::where('username', $this->username)->firstOrFail();
            $query->where('user_id', $user->id);
        }

        if ($query->where('user_id', '!=', Auth::user()->id ?? null)) {
            $query->where('status', 'published');

            if ($this->username && Auth::check() && Auth::user()->is($user)) {
                $query->orWhere('user_id', Auth::id());
            }
        }

        // if (Gate::allows('manage-post')) {

        // }

        $posts = $query->latest()
            ->paginate(10)
            ->withQueryString();

        return view('livewire.pages.blog.all', [
            'allPosts' => $posts,
        ]);
    }
}
