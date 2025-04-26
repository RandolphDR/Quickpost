<?php

namespace App\Livewire\Pages\Auth;

use Livewire\Component;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Session;

#[Layout('layouts.guest')]
class Register extends Component {
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $birthday = '';
    public string $password = '';
    public string $password_confirmation = '';
    public bool $terms_checkbox = false;

    public function register() {
        $validated = $this->validate(
            [
                'name' => ['required', 'string', 'max:100', 'regex:/^[A-Za-z.\s]{2,}$/'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
                'phone' => ['required', 'string', 'max:20', 'unique:users,phone'],
                'birthday' => ['nullable', 'date', 'before:today'],
                'password' => ['required', 'string', 'min:8', 'confirmed', Rules\Password::defaults()],
                'terms_checkbox' => ['accepted'],
            ],
            [
                'name.regex' => 'The :attribute must only contain letters and spaces.',
                'email.unique' => 'This :attribute has already been taken.',
                'phone.unique' => 'This :attribute has already been taken.',
                'terms_checkbox.accepted' => 'You must accept the :attribute.',
            ],
        );
        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        Session::flash('notify', [
            'message' => 'Welcome to Shopfinity!',
            'type' => 'success',
        ]);
        $this->redirect(route('homepage', absolute: false), navigate: true);
    }

    public function render() {
        return view('livewire.pages.auth.register');
    }
}
