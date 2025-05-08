<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use App\Models\Post;

class Popular extends Component
{
    public $popularPosts;

    public function mount()
    {
        $this->popularPosts = Post::select(['id', 'status'])
            ->withCount('likes')
            ->where('status', 'published')
            ->having('likes_count', '>', 0)
            ->orderBy('likes_count', 'desc')
            ->limit(5)
            ->get();
    }

    public function render()
    {
        return view('livewire.pages.blog.popular');
    }
}

