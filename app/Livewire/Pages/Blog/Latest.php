<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use App\Models\Post;

class Latest extends Component
{
    public $latestPosts;

    public function mount() {

        $this->latestPosts = Post::orderBy('created_at', 'desc')
            ->get();
    }
    public function render()
    {
        return view('livewire.pages.blog.latest');
    }
}
