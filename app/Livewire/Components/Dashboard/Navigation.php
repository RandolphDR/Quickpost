<?php

namespace App\Livewire\Components\Dashboard;

use Livewire\Component;
use App\Livewire\Actions\Logout;

class Navigation extends Component
{

    public function logout(Logout $logout)
    {
        $logout();
        $this->dispatch('notify', [
            'message' => 'You have been logged out successfully!',
            'type' => 'info',
        ]);
        return $this->redirect(route('homepage', absolute: false), navigate: true);
    }

    public function render()
    {
        return view('livewire.components.dashboard.navigation');
    }
}
