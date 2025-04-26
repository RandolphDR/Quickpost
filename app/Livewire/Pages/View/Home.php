<?php

namespace App\Livewire\Pages\View;

use Livewire\Component;

use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Home extends Component {
    public function mount() {
        if (auth()->check()) {
            $this->redirect(route('blog', absolute: false), navigate: true);
        }
    }

    public function render() {
        return view('welcome');
    }
}
