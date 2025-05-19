<?php

namespace App\Livewire\Components\Blog\Manage;

use Livewire\Component;
use App\Models\Post;

class Header extends Component
{
    public $post;
    public ?string $slug = null;

    public function mount()
    {
        if ($this->slug) {
            $this->post = Post::select([
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
                ->where('slug', $this->slug)
                ->firstOrFail();
        }
    }

    public function render()
    {
        return view('livewire.components.blog.manage.header');
    }
}
