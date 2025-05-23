<?php

namespace App\Livewire\Components\Blog\Manage;

use Livewire\{Component, WithPagination};
use Illuminate\Support\Facades\{Auth, Gate};
use App\Models\Post;

class All extends Component
{

    use WithPagination;

    public function deletePost($postId)
    {
        $post = Post::select(['id', 'user_id'])->findOrFail($postId);

        if (Gate::denies('manage-post', $post)) {
            $this->dispatch('notify', [
                'message' => 'You are not authorized to delete this post.',
                'type' => 'error',
            ]);
            return;
        }

        $post->delete();

        $this->dispatch('notify', [
            'message' => 'Post deleted successfully.',
            'type' => 'success',
        ]);
    }

    public function render()
    {
        $query = Post::select([
            'id',
            'user_id',
            'category_id',
            'slug',
            'title',
            'status',
            'published_at',
            'created_at',
            'updated_at'
        ])
            ->with([
                'category:id,name',
                'user:id,avatar,firstname,middlename,lastname,email'
            ])->orderBy('id', 'asc');

        if (Gate::denies('administrator-access')) {
            $query->where('user_id', Auth::user()->id);
        }

        return view('livewire.components.blog.manage.all', [
            'allPosts' => $query->paginate(10),
        ]);
    }
}
