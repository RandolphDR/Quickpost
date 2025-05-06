<?php

namespace App\Livewire\Pages\Auth;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class Login extends Component
{

    public string $username = '', $password = '';
    public bool $remember = false;

    private array $rules = [
        'username' => ['required', 'string'],
        'password' => ['required', 'string'],
    ];

    private array $messages = [
        'username.required' => 'Username, Email or Phone is required.',
        'username.string' => 'Username field must be String',
        'password.required' => 'Password is required',
        'password.string' => 'Password must be String',
    ];

    protected function CheckUsername(string $username)
    {

        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            return 'email';
        }

        if (preg_match('/^[0-9]{10,15}$/', $username)) {
            return 'phone';
        }

        return 'username';
    }

    public function login(): void
    {

        $this->validate($this->rules, $this->messages);

        $username = $this->CheckUsername($this->username);

        if (!Auth::attempt([$username => $this->username, 'password' => $this->password], $this->remember)) {
            $this->dispatch('notify', [
                'message' => 'Invalid credentials. Please try again.',
                'type' => 'error',
                'duration' => 5000,
            ]);
            return;
        }

        Session::regenerate();

        $this->redirectIntended('/', navigate: true);
    }

    public function mount()
    {
        if ($notification = session('notify')) {
            $this->dispatch('notify', $notification);
        }
    }

    public function render()
    {
        return view('livewire.pages.auth.login');
    }
}
