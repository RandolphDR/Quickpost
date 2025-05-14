<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use App\Models\Post;

class BreadcrumbsNav extends Component
{

    public $post;

    public function mount($slug)
    {

        $this->post = Post::select([
            'id',
            'user_id',
            'category_id',
            'title',
            'status', // delete after debugging
            'slug',
        ])
            ->with([
                'user:id',
                'category:id,name'
            ])
            ->where('slug', $slug)
            ->firstOrFail();
    }

    public function render()
    {
        return view('livewire.pages.blog.breadcrumbs-nav');
    }
}
