<?php

namespace App\Livewire\Pages\Auth;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;

#[Layout('layouts.guest')]
class Login extends Component {
    public string $username = '';
    public string $password = '';
    public bool $remember = false;

    public function login(): void {
        $this->validate(
            [
                'username' => ['required', 'string'],
                'password' => ['required', 'string'],
            ],
            [
                'username.required' => 'Email or Phone is required.',
                'username.string' => 'Email or Phone must be String',
                'password.required' => 'Password is required',
                'password.string' => 'Password must be String',
            ],
        );

        $field = filter_var($this->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        if (!Auth::attempt([$field => $this->username, 'password' => $this->password], $this->remember)) {
            $this->dispatch('notify', [
                'message' => 'Invalid credentials. Please try again.',
                'type' => 'error',
                'duration' => 5000,
            ]);
            return;
        }

        Session::regenerate();

        $this->redirectIntended(route('homepage', absolute: false), navigate: true);
    }

    public function mount() {
        if ($notification = session('notify')) {
            $this->dispatch('notify', $notification);
        }
    }

    public function render() {
        return view('livewire.pages.auth.login');
    }
}
