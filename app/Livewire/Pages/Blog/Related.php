<?php

namespace App\Livewire\Pages\Blog;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use App\Models\Post;

class Related extends Component
{

    public $relatedPosts;

    public function mount($slug)
    {
        $currentPost = Post::select(['id', 'category_id'])
            ->where('slug', $slug)
            ->firstOrFail();

        $this->relatedPosts = Post::select(['id', 'category_id', 'status'])
            ->where([
                ['category_id', '=', $currentPost->category_id],
                ['id', '!=', $currentPost->id],
            ])
            ->latest()
            ->get();
    }

    public function render()
    {
        return view('livewire.pages.blog.related');
    }
}
