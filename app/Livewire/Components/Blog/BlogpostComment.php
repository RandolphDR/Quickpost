<?php

namespace App\Livewire\Components\Blog;

use Livewire\Component;
use App\Models\Comment;
use Illuminate\Support\Facades\{Gate, Auth};

class BlogpostComment extends Component
{
    public $comment;
    public string $timeDisplay, $isoTime;

    protected function calculateTimeDisplay(): string
    {
        $createdAt = $this->comment->created_at;
        $now = now();

        if ($createdAt->diffInSeconds($now) < 60) {
            return 'Just Now';
        }

        if ($createdAt->diffInHours($now) < 24) {
            return $createdAt->diffForHumans();
        }

        return $createdAt->format('M j, Y \a\t g:i A');
    }

    public function deleteComment($comment)
    {

        $this->comment = Comment::with('post')->findOrFail($comment);

        if (Gate::allows('manage-post', $this->comment->post) || Auth::check() && $this->comment->user->id === Auth::user()->id) {
            $this->comment->delete();

            $this->dispatch('comment-updated', $this->comment->post->slug);

            $this->dispatch('notify', [
                'message' => 'Comment deleted successfully!',
                'type' => 'error',
            ]);
        } else {
            $this->dispatch('notify', [
                'message' => 'Failed to delete the comment. Please try again.',
                'type' => 'error',
            ]);
        }
    }

    public function placeholder()
    {
        return <<<'HTML'
            <div class="w-full bg-gray-100 dark:bg-zinc-800 p-4 gap-4 flex flex-col justify-center items-center rounded-lg">
                <header class="w-full flex justify-between items-center">
                    <div class="w-full gap-2 flex justify-start items-center">
                        <div class="w-10 h-10 bg-gray-400 rounded-full animate-shine"></div>
                        <span>
                            <div class="mb-1 h-3 w-32 bg-gray-300 dark:bg-zinc-600 rounded animate-shine"></div>
                            <div class="h-2 w-24 bg-gray-300 dark:bg-zinc-600 rounded animate-shine"></div>
                        </span>
                    </div>
                </header>
                <section class="w-full">
                    <div class="h-4 w-3/4 bg-gray-300 dark:bg-zinc-600 rounded animate-shine"></div>
                </section>
            </div>
        HTML;
    }

    public function mount($commentId)
    {
        $this->comment = Comment::with([
            'user' => function ($query) {
                $query->select('id', 'avatar', 'username', 'firstname', 'middlename', 'lastname', 'is_verified');
            },
            'post' => function ($query) {
                $query->select('id', 'user_id');
            }
        ])
            ->select('id', 'post_id', 'user_id', 'body', 'created_at', 'updated_at')
            ->where('id', $commentId)
            ->firstOrFail();

        $this->isoTime = $this->comment->created_at->toIso8601String();
        $this->timeDisplay = $this->calculateTimeDisplay();
    }

    public function render()
    {
        return view('livewire.components.blog.blogpost-comment');
    }
}
