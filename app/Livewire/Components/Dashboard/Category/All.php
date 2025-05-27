<?php

namespace App\Livewire\Components\Dashboard\Category;

use Livewire\{Component, WithPagination};
use Illuminate\Support\Facades\{Auth, Gate};
use App\Models\Category;

class All extends Component
{
    use WithPagination;

    public function deleteCategory($categoryId)
    {
        $category = Category::select(['id'])->findOrFail($categoryId);

        if (Gate::denies('administrator-access')) {
            $this->dispatch('notify', [
                'message' => 'You are not authorized to delete this category.',
                'type' => 'error',
            ]);
            return;
        }

        $category->delete();

        $this->dispatch('notify', [
            'message' => 'Category deleted successfully.',
            'type' => 'success',
        ]);
    }

    public function render()
    {
        $query = Category::select([
            'id',
            'name',
            'description',
            'created_at',
            'updated_at'
        ])
            ->orderBy('id', 'asc');

        return view('livewire.components.dashboard.category.all', [
            'allCategories' => $query->paginate(10),
        ]);
    }
}
