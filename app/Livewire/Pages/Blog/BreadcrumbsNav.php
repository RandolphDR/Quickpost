<?php

namespace App\Livewire\Pages\Blog;
use Illuminate\Support\Facades\{Gate, Session};
use Livewire\Component;
use App\Models\Post;

class BreadcrumbsNav extends Component
{

    public $post;

    public function deletePost($postId)
    {
        $post = Post::select(['id'])->findOrFail($postId);
        $post->delete();

        Session::flash('notify', [
            'message' => 'Post deleted successfully.',
            'type' => 'success',
        ]);

        return $this->redirect(route('explore'), navigate: true);
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
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.pages.blog.breadcrumbs-nav');
    }
}
