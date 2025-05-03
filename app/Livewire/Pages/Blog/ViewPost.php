<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use App\Models\Post;

class ViewPost extends Component
{

    public $post;

    public function mount($slug) {
        $this->post = Post::where('slug', $slug)->firstOrFail();
    }

    public function render() {
        return view('livewire.pages.blog.view-post');
    }
}
