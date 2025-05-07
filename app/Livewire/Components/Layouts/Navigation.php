<?php

namespace App\Livewire\Components\Layouts;

use Livewire\Component;
use Illuminate\Support\Facades\{Auth, Session};
use Livewire\Attributes\On;
use App\Livewire\Actions\Logout;

class Navigation extends Component
{

    public $user;

    public function profileUpdated()
    {
        $this->user = Auth::fresh()->user();
    }

    public function logout(Logout $logout)
    {
        $logout();
        return $this->redirect(route('homepage', absolute: false), navigate: true);
    }

    #[On('profile-updated')]
    public function mount()
    {
        if (Auth::check()) {
            $this->user = Auth::user();
        }

    }

    public function render()
    {
        return view('livewire.components.layouts.navigation');
    }
}
