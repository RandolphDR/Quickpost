<?php

namespace App\Livewire\Components\Dashboard\Category;

use Livewire\Component;
use Illuminate\Support\Facades\{Session, Gate};
use App\Models\Category;

class EditForm extends Component
{

    public $category;
    public string $name = "", $description = "";

    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'description' => ['nullable', 'string', 'max:255'],
    ];

    protected $messages = [
        'name.required' => 'The category name is required.',
        'name.string' => 'The category name must be a string.',
        'name.max' => 'The category name may not be greater than 255 characters.',
        'description.string' => 'The description must be a string.',
        'description.max' => 'The description may not be greater than 255 characters.',
        'description.required' => 'The description is required if provided.',
    ];

    public function updateCategory()
    {
        if (Gate::denies('administrator-access')) {
            $this->dispatch('notify', [
                'message' => 'You are not authorized to update this category.',
                'type' => 'error',
            ]);
            return;
        }

        try {
            $this->validate($this->rules, $this->messages);

            $this->category->update($this->validate());

            Session::flash('notify', [
                'message' => 'Category has been successfully updated.',
                'type' => 'success',
            ]);

            return $this->redirect(route('admin.categories.manage'), navigate: true);

        } catch (\Exception $e) {
            $this->dispatch('notify', [
                'message' => $e->getMessage(),
                'type' => 'error',
            ]);
            return;
        }
    }

    public function deleteCategory($categoryId)
    {
        if (Gate::denies('administrator-access')) {
            $this->dispatch('notify', [
                'message' => 'You are not authorized to delete this category.',
                'type' => 'error',
            ]);
            return;
        }

        $category = Category::select(['id'])->findOrFail($categoryId);

        $category->delete();

        Session::flash('notify', [
            'message' => 'Category deleted successfully.',
            'type' => 'success',
        ]);

        return $this->redirect(route('admin.categories.manage'), navigate: true);
    }

    public function mount($categoryId)
    {
        Gate::authorize('administrator-access');

        $this->category = Category::select('id', 'name', 'description', 'created_at', 'updated_at')->findOrFail($categoryId);

        $this->name = $this->category->name ?? '';
        $this->description = $this->category->description ?? '';

    }

    public function render()
    {
        return view('livewire.components.dashboard.category.edit-form');
    }
}
