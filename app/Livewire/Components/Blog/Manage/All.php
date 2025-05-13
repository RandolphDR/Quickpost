<?php

namespace App\Livewire\Components\Blog\Manage;

use Livewire\{Component, WithPagination};
use App\Models\Post;
use App\Models\User;

class All extends Component
{

    use WithPagination;

    public function render()
    {
        $query = Post::select([
            'id',
            'user_id',
            'slug',
            'title',
            'status',
            'published_at',
            'created_at',
            'updated_at'
        ])->with([
            'user:id,avatar,firstname,middlename,lastname,email'
        ])->orderBy('id', 'asc');

        return view('livewire.components.blog.manage.all', [
            'allPosts' => $query->paginate(10),
        ]);
    }
}
