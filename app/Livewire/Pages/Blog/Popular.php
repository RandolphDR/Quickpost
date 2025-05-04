<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use App\Models\Post;

class Popular extends Component
{
    public $popularPosts;

    public function mount()
    {
        $this->popularPosts = Post::select([
            'id',
            'user_id',
            'cover_image',
            'title',
            'short_description',
            'slug',
            'created_at'
        ])
            ->withCount('likes')
            ->with(['user'])
            ->where('status', 'published')
            ->orderBy('likes_count', 'desc')
            ->limit(5)
            ->get();
    }

    public function render()
    {
        return view('livewire.pages.blog.popular');
    }
}

