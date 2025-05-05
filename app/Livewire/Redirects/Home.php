<?php

namespace App\Livewire\Redirects;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class Home extends Component
{

    private function handleRedirect()
    {

        $homeRoute = 'homepage';

        if (Auth::check()) {

            if (Gate::allows('developer-access')) {
                $homeRoute = 'about';
            } else if (Gate::allows('administrator-access')) {
                $homeRoute = 'contact';
            } else if (Gate::allows('user-access')) {
                $homeRoute = 'homepage';
            }
            return $this->redirect(route($homeRoute), navigate: true);
        } else {
            return $this->redirect(route($homeRoute), navigate: true);
        }

    }

    public function mount()
    {
        $this->handleRedirect();
    }

    public function render()
    {
        return '';
    }
}
