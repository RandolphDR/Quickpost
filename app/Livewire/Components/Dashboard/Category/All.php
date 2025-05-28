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
        if (Gate::denies('administrator-access')) {
            $this->dispatch('notify', [
                'message' => 'You are not authorized to delete this category.',
                'type' => 'error',
            ]);
            return;
        }

        $category = Category::select(['id'])->findOrFail($categoryId);

        $category->delete();

        $this->dispatch('notify', [
            'message' => 'Category deleted successfully.',
            'type' => 'success',
        ]);
    }

    public function mount()
    {
        if ($notification = session('notify')) {
            $this->dispatch('notify', $notification);
        }
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
