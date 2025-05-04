<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\{Post, Comment, Like};

class CommentSection extends Component
{
    public Post $post;
    public string $body;

    protected $rules = [
        'body' => 'required|string|max:500'
    ];

    protected $messages = [
        'body.required' => 'Your comment cannot be empty. Please share your thoughts!',
        'body.string' => 'Your comment must be in a valid text format.',
        'body.max' => 'Comment cannot exceed 500 characters.',
    ];

    public function mount(string $slug)
    {
        $this->loadPost($slug);
    }

    protected function loadPost(string $slug)
    {
        $this->post = Post::with([
            'comments' => fn($q) => $q->latest(),
            'comments.user',
            'likes'
        ])->where('slug', $slug)->firstOrFail();
    }

    public function postComment()
    {
        $this->validate();

        try {
            Comment::create([
                'post_id' => $this->post->id,
                'user_id' => Auth::id(),
                'body' => $this->body
            ]);

            $this->dispatch('notify', [
                'message' => 'Comment posted successfully!',
                'type' => 'success',
            ]);

            $this->reset('body');
            $this->loadPost($this->post->slug);

        } catch (\Exception $e) {
            $this->dispatch('notify', [
                'message' => 'Failed to post comment. Please try again.',
                'type' => 'error',
            ]);
        }
    }

    public function deleteComment(Comment $comment)
    {
        try {
            $this->authorize('delete', $comment);

            $comment->delete();
            $this->loadPost($this->post->slug);

            $this->dispatch(
                'notify',
                message: 'Comment deleted successfully!',
                type: 'success'
            );

        } catch (\Exception $e) {

            $this->dispatch('notify', [
                'message' => 'Failed to delete comment: ' . $e->getMessage(),
                'type' => 'error',
            ]);
        }

    }

    public function render()
    {
        return view('livewire.pages.blog.comment-section');
    }
}
