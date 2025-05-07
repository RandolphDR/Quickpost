<?php

namespace App\Livewire\Components\Blog;

use Livewire\Component;
use App\Models\Post;

class BlogpostSearch extends Component
{
    public string $query = '';
    public array $results = [];

    // This method will trigger whenever the query changes
    public function updatedQuery()
    {
        // Only search if the query is more than one character
        if (strlen($this->query) > 1) {
            $this->results = Post::where('title', 'like', '%' . $this->query . '%')
                ->limit(5)  // Limit the number of suggestions
                ->get(['title', 'slug'])
                ->toArray();
        } else {
            $this->results = [];
        }
    }

    // This method will handle selecting a post from the suggestions
    public function selectPost($slug)
    {
        return redirect()->route('blog.view', ['slug' => $slug]);
    }

    public function render()
    {
        return view('livewire.components.blog.blogpost-search');
    }
}
