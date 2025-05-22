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

    public function mount()
    {
        if ($notification = session('notify')) {
            $this->dispatch('notify', $notification);
        }
    }

    public function render()
    {
        $query = Post::query()->with('user');
        $currentUser = Auth::user();

        if ($this->username) {
            $user = User::where('username', $this->username)->firstOrFail();
            $query->where('user_id', $user->id);

            if (!$currentUser?->is($user)) {
                $query->where('status', 'published');
            } else if ($this->status !== 'all') {
                $query->where('status', $this->status);
            }
        } else {
            $query->where('status', 'published');
        }

        $posts = $query->latest()
            ->paginate(10)
            ->withQueryString();

        return view('livewire.pages.blog.all', [
            'allPosts' => $posts,
        ]);
    }
}
