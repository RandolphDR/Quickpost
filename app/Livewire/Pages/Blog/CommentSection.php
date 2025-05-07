<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\{Gate, Auth, Session};
use App\Models\{Post, Comment, Like};

class CommentSection extends Component
{
    public $post;
    public int $postLikeCount, $commentCount;
    public bool $isLiked;
    public string $body;

    protected $rules = [
        'body' => ['required', 'string', 'max:500']
    ];

    protected $messages = [
        'body.required' => 'Your comment cannot be empty. Please share your thoughts!',
        'body.string' => 'Your comment must be in a valid text format.',
        'body.max' => 'Comment cannot exceed 500 characters.',
    ];

    public function toggleLike()
    {
        if (!Auth::check()) {
            Session::flash('notify', [
                'message' => 'You need to be logged in to like a post.',
                'type' => 'error',
            ]);

            $this->redirect(route('login'), navigate: true);
            return;
        }

        $this->postLikeCount = $this->isLiked ? $this->postLikeCount - 1 : $this->postLikeCount + 1;

        $this->isLiked = !$this->isLiked;

        Like::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'post_id' => $this->post->id
            ],
            ['is_liked' => $this->isLiked]
        );

        $this->dispatch('notify', [
            'message' => $this->isLiked ? 'You have liked this post!' : 'You have unliked this post.',
            'type' => $this->isLiked ? 'success' : 'error',
        ]);

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

    protected function loadPost(string $slug)
    {
        $this->post = Post::select('id')
            ->where('slug', $slug)
            ->withCount(['likes'])
            ->with([
                'comments' => function ($query) {
                    $query->latest()->select('id', 'post_id', 'user_id', 'body', 'created_at');
                },
                'comments.user' => function ($query) {
                    $query->select('id', 'username', 'firstname', 'middlename', 'lastname', 'avatar');
                },
            ])
            ->firstOrFail();

        $this->postLikeCount = $this->post->likes_count;
    }

    #[On('comment-updated')]
    public function mount(string $slug)
    {
        $this->loadPost($slug);
        $this->isLiked = $this->post->likes()
            ->where('user_id', auth()->id())
            ->where('is_liked', true)
            ->exists();
    }

    public function render()
    {
        return view('livewire.pages.blog.comment-section');
    }
}
