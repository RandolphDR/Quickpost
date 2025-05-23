<?php

namespace App\Livewire\Actions\Blog;

use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Delete
{
    public function __invoke(Component $component, int $postId)
    {
        $post = Post::select(['id', 'user_id'])->findOrFail($postId);

        if (!Gate::allows('manage-post', $post)) {
            $component->dispatch('notify', [
                'message' => 'You are not authorized to delete this post.',
                'type' => 'error',
            ]);
            return;
        }

        $post->delete();

        session()->flash('notify', [
            'message' => 'Post deleted successfully.',
            'type' => 'success',
        ]);

        return $component->redirect(route('explore'), navigate: true);
    }
}
