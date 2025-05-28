<?php

namespace App\Livewire\Components\Blog;

use Livewire\Component;
use App\Models\Post;

class BlogpostSearch extends Component
{
    public string $query = '';
    public array $results = [];

    public function updatedQuery()
    {
        if (strlen($this->query) > 1) {
            $this->results = Post::where('title', 'like', '%' . $this->query . '%')
                ->limit(5)
                ->get(['title', 'slug'])
                ->toArray();
        } else {
            $this->results = [];
        }
    }

    public function render()
    {
        return view('livewire.components.blog.blogpost-search');
    }
}
