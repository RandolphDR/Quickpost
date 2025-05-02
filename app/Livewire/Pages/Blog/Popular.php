<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use App\Models\Post;

class Popular extends Component
{
    public $popularPosts;

    public function mount()
    {
        $this->popularPosts = Post::withCount('likes')  // Count likes relation
            ->orderBy('likes_count', 'desc')  // Order by like count
            ->limit(5)
            ->get();
    }

    public function render()
    {
        return view('livewire.pages.blog.popular');
    }
}

