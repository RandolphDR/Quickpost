<?php

namespace App\Livewire\Pages\Blog;

use Illuminate\Support\Facades\{Auth, Gate, Session};
use App\Livewire\Actions\Blog\Delete;
use Livewire\Component;
use App\Models\Post;

class BreadcrumbsNav extends Component
{

    public $post;
    public function deletePost($postId)
    {
        return (new Delete())($this, $postId);
    }


    public function mount($slug)
    {

        $this->post = Post::select([
            'id',
            'user_id',
            'category_id',
            'title',
            'slug',
            'status'
        ])
            ->with([
                'user:id',
                'category:id,name'
            ])
            ->where('slug', $slug)
            ->firstOrFail();

        if ($this->post->status !== 'published' && Gate::denies('manage-post', $this->post)) {
            abort(403);
        }
    }

    public function render()
    {
        return view('livewire.pages.blog.breadcrumbs-nav');
    }
}
