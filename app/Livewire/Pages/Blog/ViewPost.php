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

    public string $createdAt, $publishedAt, $updatedAt;

    protected function calculateTimeDisplay(string $field): string
    {
        $timestamp = $this->post->{$field} ?? null;

        if (!$timestamp) {
            return 'N/A';
        }

        $now = now();

        if ($timestamp->diffInSeconds($now) < 60) {
            return 'Just Now';
        }

        if ($timestamp->diffInHours($now) < 24) {
            return $timestamp->diffForHumans();
        }

        return $timestamp->format('M j, Y \a\t g:i A');
    }

    protected function setTimeDisplay()
    {
        $this->createdAt = $this->calculateTimeDisplay('created_at');
        $this->publishedAt = $this->calculateTimeDisplay('published_at');
        $this->updatedAt = $this->calculateTimeDisplay('updated_at');
    }

    public function mount($slug)
    {

        if ($notification = session('notify')) {
            $this->dispatch('notify', $notification);
        }

        $this->post = Post::with([
            'user:id,username,avatar,firstname,lastname,middlename,is_verified',
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
                'published_at',
                'created_at',
                'updated_at'
            ])
            ->where('slug', $slug)
            ->firstOrFail();

        if ($this->post->status !== 'published' && Gate::denies('manage-post', $this->post)) {
            abort(404);
        }

        $this->setTimeDisplay();
    }

    public function render()
    {
        return view('livewire.pages.blog.view-post');
    }
}
