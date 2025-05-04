<?php

namespace App\Livewire\Components\Layouts;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use App\Livewire\Actions\Logout;

class Navigation extends Component {

    public string $name = '';

    #[On('profile-updated')]
    public function profileUpdated() {
        $this->name = auth()->user()->fresh()->fullname;
    }

    public function logout(Logout $logout) {
        $logout();
        return $this->redirect(route('homepage', absolute: false), navigate: true);
    }

    public function mount() {
        if(Auth::check()) {
            $this->name = auth()->user()->fullname;
        }

    }

    public function render() {
        return view('livewire.components.layouts.navigation');
    }
}
