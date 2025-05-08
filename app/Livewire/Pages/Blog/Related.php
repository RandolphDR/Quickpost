<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use App\Models\Post;

class Related extends Component
{

    public $relatedPosts, $slug;

    public function loadPosts()
    {
        $currentPost = Post::select(['id', 'category_id'])
            ->where('slug', $this->slug)
            ->where('status', 'published')
            ->firstOrFail();

        $this->relatedPosts = Post::select(['id', 'category_id', 'status'])
            ->where([
                ['status', '=', 'published'],
                ['category_id', '=', $currentPost->category_id],
                ['id', '!=', $currentPost->id],
            ])
            ->latest()
            ->get();
    }

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->relatedPosts = collect();
    }


    public function render()
    {
        return view('livewire.pages.blog.related');
    }
}
