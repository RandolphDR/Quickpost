<?php

namespace App\Livewire\Pages\Blog;

use Livewire\{Component, WithPagination};
use App\Models\Post;

class All extends Component
{
    use WithPagination;

    public function render()
    {
        $getAllPosts = Post::select(['id', 'status'])
            ->latest()
            ->paginate(10);

        return view('livewire.pages.blog.all', [
            'allPosts' => $getAllPosts,
        ]);
    }
}
