<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use Illuminate\Support\Facades\{Auth, Gate};
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

        $this->isoTime = $this->post->created_at->toIso8601String();
        $this->timeDisplay = $this->post->created_at->diffForHumans();
        // To Fix on the frontend of this code everyone can visit it by link but it will censored or throw a warning for the contents.
    }

    public function render()
    {
        return view('livewire.pages.blog.view-post');
    }
}
