<?php

namespace App\Livewire\Components\Dashboard\Blogs;

use Livewire\Component;
use App\Models\Post;

class SummaryCard extends Component {

    public $posts;
    public int $totalBlogs = 0, $totalPublished = 0, $totalDrafts = 0, $totalTrashBlogs = 0;

    public function placeholder() {
        return <<<'HTML'
            <div class="w-[300px] gap-4 p-4 flex flex-col justify-start bg-white/70 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="w-full flex justify-between items-center">
                    <span class="w-10 h-10 rounded-lg animate-shine"></span>
                    <span class="w-3 h-6 rounded-lg animate-shine"></span>
                </div>
                <div class="w-full flex justify-between items-center mt-2">
                    <div class="gap-2 flex flex-col">
                        <span class="w-20 h-5 rounded-lg animate-shine"></span>
                        <span class="w-10 h-8 rounded-lg animate-shine"></span>
                    </div>
                </div>

                <hr class="w-full my-2 border-gray-300 dark:border-gray-600">

                <div class="w-full flex flex-col gap-2">
                    <div class="flex justify-between">
                        <span class="w-24 h-4 rounded-lg animate-shine"></span>
                        <span class="w-8 h-4 rounded-lg animate-shine"></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="w-24 h-4 rounded-lg animate-shine"></span>
                        <span class="w-8 h-4 rounded-lg animate-shine"></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="w-24 h-4 rounded-lg animate-shine"></span>
                        <span class="w-8 h-4 rounded-lg animate-shine"></span>
                    </div>
                </div>
            </div>
        HTML;
    }

    public function mount() {
        $this->posts = Post::select('id', 'status')->get();
        $this->totalBlogs = Post::withTrashed()->count();
        $this->totalPublished = Post::where('status', 'published')->count();
        $this->totalDrafts = Post::where('status', 'draft')->count();
        $this->totalTrashBlogs = Post::onlyTrashed()->count();
    }

    public function render() {
        return view('livewire.components.dashboard.blogs.summary-card');
    }
}
