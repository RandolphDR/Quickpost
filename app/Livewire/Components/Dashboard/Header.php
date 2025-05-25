<?php

namespace App\Livewire\Components\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\{Auth, Session};
use Livewire\Attributes\On;
use App\Livewire\Actions\Logout;

class Header extends Component
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
        return view('livewire.components.dashboard.header');
    }
}
