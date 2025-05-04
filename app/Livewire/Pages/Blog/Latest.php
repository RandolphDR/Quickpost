<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use App\Models\Post;

class Latest extends Component
{
    public $latestPosts;

    public function mount()
    {

        $this->latestPosts = Post::select([
            'id',
            'user_id',
            'cover_image',
            'title',
            'short_description',
            'slug',
            'created_at'
        ])
            ->with(['user'])
            ->where('status', 'published')
            ->latest()
            ->get();

    }
    public function render()
    {
        return view('livewire.pages.blog.latest');
    }
}
