<?php

namespace App\Livewire\Components\Blog\Manage;

use Livewire\{Component, WithFileUploads};
use Illuminate\Support\Facades\{Auth, Session, Gate};
use App\Models\{User, Post, Category};
use Illuminate\Support\Str;

class CreateForm extends Component
{
    use WithFileUploads;

    public $categories, $users;

    public $user_id,
    $title,
    $newCoverImage,
    $category_id,
    $short_description,
    $body;

    protected $rules = [
        'title' => ['required', 'string', 'max:255'],
        'newCoverImage' => ['nullable', 'image', 'max:10240'],
        'category_id' => ['required', 'exists:categories,id'],
        'short_description' => ['required', 'string', 'max:500'],
        'body' => ['required', 'string'],
    ];

    public function mount()
    {
        if ($notification = session('notify')) {
            $this->dispatch('notify', $notification);
        }

        $this->categories = Category::select(['id', 'name'])
            ->orderBy('name', 'asc')
            ->get();

        $this->users = User::select(['id', 'firstname', 'lastname', 'middlename'])
            ->orderBy('id', 'asc')
            ->get();
    }

    public function saveDraft()
    {
        $this->validate([
            'user_id' => ['required', 'exists:users,id'],
            'title' => ['required', 'string', 'max:255'],
            'newCoverImage' => ['nullable', 'image', 'max:10240'],
            'category_id' => ['required', 'exists:categories,id'],
            'short_description' => ['required', 'string', 'max:500'],
            'body' => ['required', 'string'],
        ]);

        $this->createPost('draft');
    }

    public function publish()
    {
        $this->validate();
        $this->createPost('published');
    }

    private function createPost($status)
    {
        $coverImagePath = null;
        $publishDate = null;

        if ($this->newCoverImage) {
            $extension = $this->newCoverImage->getClientOriginalExtension();
            $originalName = pathinfo($this->newCoverImage->getClientOriginalName(), PATHINFO_FILENAME);
            $slug = Str::slug($originalName);
            $filename = $slug . '-' . now()->format('mdYHis') . '.' . $extension;

            $path = $this->newCoverImage->storeAs('post_cover_images', $filename, 'public');
            $coverImagePath = 'storage/' . $path;
        }

        if ($status === 'published') {
            $publishDate = now();
        }

        if (Gate::denies('administrator-access') || $this->user_id === null) {
            $this->user_id = Auth::user()->id;
        }

        $post = Post::create([
            'title' => $this->title,
            'cover_image' => $coverImagePath,
            'category_id' => $this->category_id,
            'short_description' => $this->short_description,
            'body' => $this->body,
            'status' => $status,
            'user_id' => $this->user_id,
            'published_at' => $publishDate
        ]);

        Session::flash('notify', [
            'message' => 'Post has been ' . ($status === 'draft' ? 'saved as draft' : 'published') . '.',
            'type' => 'success',
        ]);

        return $this->redirect(Gate::allows('administrator-access') ? route('admin.blog.manage') : route('blog.view', $post->slug), navigate: true);
    }

    public function render()
    {
        return view('livewire.components.blog.manage.create-form');
    }
}
