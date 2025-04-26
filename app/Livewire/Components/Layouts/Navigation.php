<?php

namespace App\Livewire\Components\Layouts;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Livewire\Actions\Logout;


class Navigation extends Component
{
    public function logout(Logout $logout)
    {
        $logout();
        Session::flash('notify', [
            'message' => 'You have been logged out successfully!',
            'type' => 'success',
        ]);
        return $this->redirect(route('homepage', absolute: false), navigate: true);
    }
    
    public function render()
    {
        return view('livewire.components.layouts.navigation');
    }
}
