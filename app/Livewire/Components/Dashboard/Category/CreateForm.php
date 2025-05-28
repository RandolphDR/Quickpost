<?php

namespace App\Livewire\Components\Dashboard\Category;

use Livewire\Component;
use Illuminate\Support\Facades\{Gate, Session};
use App\Models\{Category};

class CreateForm extends Component
{
    public $name,
    $description;

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

    public function createCategory()
    {
        if (Gate::denies('administrator-access')) {
            $this->dispatch('notify', [
                'message' => 'You do not have permission to create a category.',
                'type' => 'error'
            ]);
            return;
        }

        try {
            $this->validate($this->rules, $this->messages);

            Category::create($this->validate());

            $this->reset();

            Session::flash('notify', [
                'message' => 'Category has been successfully created.',
                'type' => 'success',
            ]);

            return $this->redirect(route('admin.categories.manage'), navigate: true);

        } catch (\Exception $e) {
            $this->dispatch('notify', [
                'message' => $e->getMessage(),
                'type' => 'error'
            ]);
            return;
        }
    }

    public function render()
    {
        return view('livewire.components.dashboard.category.create-form');
    }
}
