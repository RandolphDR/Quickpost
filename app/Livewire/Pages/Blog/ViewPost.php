<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;

class ViewPost extends Component
{
    public $post;
    public string $timeDisplay;
    public string $isoTime;

    protected function calculateTimeDisplay(): string
    {
        $createdAt = $this->post->created_at;
        $now = now();

        if ($createdAt->diffInSeconds($now) < 60) {
            return 'Just Now';
        }

        if ($createdAt->diffInHours($now) < 24) {
            return $createdAt->diffForHumans();
        }

        return $createdAt->format('M j, Y \a\t g:i A');
    }

    public function mount($slug)
    {
        $this->post = Post::with([
            'user:id,username,avatar,firstname,lastname,middlename',
            'category:id,name'
        ])
            ->select([
                'id',
                'user_id',
                'cover_image',
                'category_id',
                'title',
                'body',
                'slug',
                'status',
                'created_at',
                'updated_at'
            ])
            ->where('slug', $slug)
            ->firstOrFail();

        if ($this->post->status !== 'published' && Gate::denies('manage-post', $this->post)) {
            abort(404);
        }

        $this->isoTime = $this->post->created_at->toIso8601String();
        $this->timeDisplay = $this->post->created_at->diffForHumans();
    }

    public function render()
    {
        return view('livewire.pages.blog.view-post');
    }
}
