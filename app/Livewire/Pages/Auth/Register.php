<?php

namespace App\Livewire\Pages\Auth;

use Livewire\Component;
use Carbon\Carbon;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Session;

class Register extends Component
{

    public string $username = '', $firstname = '', $lastname = '', $middlename = '', $email = '', $phone = '', $birthday = '', $password = '', $password_confirmation = '';
    private array $messages = [
        'username.required' => 'Please enter your Username.',
        'username.string' => 'Username must be a string.',
        'username.unique' => 'This Username has already been taken',
        'firstname.required' => 'Please enter your firstname.',
        'firstname.string' => 'First name must be a string.',
        'firstname.regex' => 'First name must only contain letters and spaces.',
        'lastname.required' => 'Please enter your lastname.',
        'lastname.string' => 'Last name must be a string.',
        'lastname.regex' => 'Last name must only contain letters and spaces.',
        'middlename.string' => 'Middle name must be a string.',
        'middlename.regex' => 'Middle name must only contain letters and spaces.',
        'email.required' => 'Email is required.',
        'email.email' => 'Email must be a valid email address.',
        'email.unique' => 'This email has already been taken.',
        'phone.required' => 'Phone number is required.',
        'phone.unique' => 'This phone number has already been taken.',
        'birthday.date' => 'Birthday must be a valid date.',
        'birthday.before_or_equal' => "You must be at least 12 years old.",
        'password.required' => 'Password is required.',
        'password.string' => 'Password must be a string.',
        'password.min' => "Password must be at least 8 characters.",
    ];

    public function register()
    {

        $validated = $this->validate([
            'username' => ['required', 'string', 'max:100', 'unique:users,username'],
            'firstname' => ['required', 'string', 'max:100', 'regex:/^[A-Za-z.\s]{2,}$/'],
            'lastname' => ['required', 'string', 'max:100', 'regex:/^[A-Za-z.\s]{2,}$/'],
            'middlename' => ['nullable', 'string', 'max:100', 'regex:/^[A-Za-z.\s]{2,}$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['nullable', 'string', 'max:20', 'unique:users,phone'],
            'birthday' => ['nullable', 'date', 'before_or_equal:' . Carbon::today()->subYears(12)->format('Y-m-d')],
            'password' => ['required', 'string', 'min:8', 'confirmed', Rules\Password::defaults()],
        ], $this->messages);

        // Default Avatar Modify this in the future when you have a upload photo system
        $validated['avatar'] = 'storage/avatar/Avatar-Default.png';
        $validated['birthdate'] = $this->birthday;
        $validated['age'] = Carbon::parse($this->birthday)->age;
        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirectIntended('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.pages.auth.register');
    }
}
