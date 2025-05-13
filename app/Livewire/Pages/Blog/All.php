<?php

namespace App\Livewire\Pages\Blog;

use Livewire\{Component, WithPagination};
use App\Models\Post;
use App\Models\User;

class All extends Component
{
    use WithPagination;

    public ?string $username = null;

    public function render()
    {
        $query = Post::select(['id', 'status', 'user_id'])->latest();

        if ($this->username) {
            $user = User::where('username', $this->username)->first();
            if ($user) {
                $query->where('user_id', $user->id);
            } else {
                $query->whereNull('id');
            }
        }

        return view('livewire.pages.blog.all', [
            'allPosts' => $query->paginate(10),
        ]);
    }
}
