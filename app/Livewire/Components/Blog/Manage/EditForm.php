<?php

namespace App\Livewire\Components\Blog\Manage;

use App\Livewire\Actions\Blog\Delete;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use App\Models\{Post, Category};
use Illuminate\Support\Facades\Session;

class EditForm extends Component
{
    use WithFileUploads;

    public Post $post;
    public $categories;
    public $existingCoverImage;
    public $newCoverImage = null;
    public string $title = '';
    public string $category_id = '';
    public string $short_description = '';
    public string $body = '';

    protected $rules = [
        'newCoverImage' => ['nullable', 'image', 'max:10240'],
        'category_id' => ['required', 'exists:categories,id'],
        'title' => ['required', 'string', 'max:255'],
        'short_description' => ['required', 'string', 'max:255'],
        'body' => ['required', 'string'],
    ];

    protected $messages = [
        'newCoverImage.image' => 'The cover image must be a valid image file.',
        'newCoverImage.max' => 'The cover image must not be larger than 10MB.',
        'category_id.required' => 'The category is required.',
        'category_id.exists' => 'The selected category is invalid.',
        'title.required' => 'The title is required.',
        'title.max' => 'The title must not exceed 255 characters.',
        'short_description.required' => 'The short description is required.',
        'short_description.max' => 'The short description must not exceed 255 characters.',
        'body.required' => 'The post content is required.',
    ];

    public function mount($slug)
    {
        $this->post = Post::select([
            'id',
            'user_id',
            'title',
            'cover_image',
            'category_id',
            'short_description',
            'body',
            'slug',
            'status',
            'published_at',
            'created_at',
            'updated_at'
        ])
            ->with(['user:id,username,avatar,firstname,lastname,middlename', 'category:id,name'])
            ->where('slug', $slug)
            ->firstOrFail();

        Gate::authorize('manage-post', $this->post);

        $this->existingCoverImage = $this->post->cover_image ?? '';
        $this->title = $this->post->title;
        $this->category_id = $this->post->category_id;
        $this->short_description = $this->post->short_description;
        $this->body = $this->post->body;

        $this->categories = Category::select(['id', 'name'])
            ->orderBy('id', 'asc')
            ->get();
    }

    public function saveChanges()
    {
        $this->validate();

        $status = $this->post->status === 'published' ? 'published' : $this->post->status;
        $this->updatePosts($status);
    }

    public function publish()
    {
        if ($this->post->status !== 'draft') {
            $this->dispatch('notify', [
                'message' => 'Post is already published.',
                'type' => 'error',
            ]);
            return;
        }

        $this->validate();
        $this->updatePosts('published');
    }

    private function updatePosts($status)
    {
        Gate::authorize('manage-post', $this->post);

        $coverImage = $this->existingCoverImage;

        if ($this->newCoverImage) {
            $extension = $this->newCoverImage->getClientOriginalExtension();
            $originalName = pathinfo($this->newCoverImage->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = Str::slug($originalName) . '-' . now()->format('mdYHis') . '.' . $extension;
            $path = $this->newCoverImage->storeAs('post_cover_images', $filename, 'public');
            $coverImage = 'storage/' . $path;
        }

        $updateData = [
            'title' => $this->title,
            'category_id' => $this->category_id,
            'short_description' => $this->short_description,
            'body' => $this->body,
            'status' => $status,
            'cover_image' => $coverImage,
        ];

        if ($this->post->status === 'draft' && $status === 'published') {
            $updateData['published_at'] = now();
        }

        $this->post->update($updateData);

        Session::flash('notify', [
            'message' => 'Post updated successfully.',
            'type' => 'success',
        ]);

        return $this->redirect(route('blog.view', $this->post->slug), navigate: true);
    }

    public function deletePost($postId)
    {
        return (new Delete())($this, $postId);
    }

    public function render()
    {
        return view('livewire.components.blog.manage.edit-form');
    }
}
