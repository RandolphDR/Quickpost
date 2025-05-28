<?php

namespace App\Livewire\Components\Dashboard\Category;

use Livewire\Component;
use Illuminate\Support\Facades\{Session, Gate};
use App\Models\Category;

class EditForm extends Component
{

    public $category;
    public string $name = "", $description = "";

    public function updateCategory()
    {

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
