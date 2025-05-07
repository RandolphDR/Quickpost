<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
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
        $this->post = Post::select([
            'id',
            'user_id',
            'cover_image',
            'category_id',
            'title',
            'body',
            'slug',
            'created_at',
            'updated_at'
        ])
            ->with([
                'user:id,username,avatar,firstname,lastname,middlename',
            ])
            ->where('slug', $slug)
            ->firstOrFail();

        $this->isoTime = $this->post->created_at->toIso8601String();
        $this->timeDisplay = $this->calculateTimeDisplay();

    }


    public function render()
    {
        return view('livewire.pages.blog.view-post');
    }
}
