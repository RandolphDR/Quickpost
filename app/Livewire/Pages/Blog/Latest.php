<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use App\Models\Post;

class Latest extends Component
{
    public $latestPosts;

    public function loadPosts()
    {
        $this->latestPosts = Post::select(['id', 'status'])
            ->where('status', 'published')
            ->latest()
            ->limit(5)
            ->get();
    }

    public function mount()
    {
        $this->latestPosts = collect();
    }

    public function render()
    {
        return view('livewire.pages.blog.latest');
    }
}
