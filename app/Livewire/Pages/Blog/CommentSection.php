<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\{Gate, Auth};
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

    protected function loadPost(string $slug)
    {
        $this->post = Post::where('slug', $slug)
            ->with([
                'comments' => function ($query) {
                    $query->latest();
                },
                'comments.user',
                'likes'
            ])
            ->firstOrFail();
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

    #[On('comment-updated')]
    public function mount(string $slug)
    {
        $this->loadPost($slug);
    }

    public function render()
    {
        return view('livewire.pages.blog.comment-section');
    }
}
