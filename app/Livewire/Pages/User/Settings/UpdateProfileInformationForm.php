<?php

namespace App\Livewire\Pages\User\Settings;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class UpdateProfileInformationForm extends Component
{
    public string
    $username = '',
    $firstname = '',
    $lastname = '',
    $middlename = '',
    $email = '',
    $phone = '',
    $birthday = '',
    $age = '',
    $password = '',
    $password_confirmation = '';

    public array
    $birthplace = [],
    $address = [];

    private array $messages = [
        'username.required' => 'Please enter your Username.',
        'username.unique' => 'This Username has already been taken.',
        'firstname.required' => 'Please enter your first name.',
        'firstname.regex' => 'First name must only contain letters and spaces.',
        'lastname.required' => 'Please enter your last name.',
        'lastname.regex' => 'Last name must only contain letters and spaces.',
        'middlename.regex' => 'Middle name must only contain letters and spaces.',
        'email.required' => 'Email is required.',
        'email.email' => 'Email must be a valid email address.',
        'email.unique' => 'This email has already been taken.',
        'phone.unique' => 'This phone number has already been taken.',
        'birthday.before_or_equal' => "You must be at least 12 years old.",
        'birthplace.city.required' => 'Please enter your birthplace city.',
        'birthplace.country.required' => 'Please enter your birthplace country.',
        'address.street.required' => 'Please enter your street address.',
        'address.city.required' => 'Please enter your city.',
        'address.country.required' => 'Please enter your country.',
    ];

    public function mount()
    {
        $user = Auth::user();

        $this->username = $user->username;
        $this->firstname = $user->firstname;
        $this->lastname = $user->lastname;
        $this->middlename = $user->middlename ?? '';
        $this->birthday = optional($user->birthdate)->format('Y-m-d');
        $this->age = $user->age;
        $this->birthplace = $user->birthplace ?? ['city' => '', 'country' => ''];
        $this->address = $user->address ?? ['street' => '', 'city' => '', 'state' => '', 'country' => '', 'zip' => ''];
        $this->email = $user->email;
        $this->phone = $user->phone ?? '';
    }

    public function updateProfileInformation()
    {
        $user = Auth::user();

        $validated = $this->validate([
            'username' => ['required', 'string', 'max:100', Rule::unique('users')->ignore($user->id)],
            'firstname' => ['required', 'string', 'max:100', 'regex:/^[A-Za-z.\s]{2,}$/'],
            'lastname' => ['required', 'string', 'max:100', 'regex:/^[A-Za-z.\s]{2,}$/'],
            'middlename' => ['nullable', 'string', 'max:100', 'regex:/^[A-Za-z.\s]{2,}$/'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'phone' => ['nullable', 'string', 'max:20', Rule::unique('users')->ignore($user->id)],
            'birthday' => ['nullable', 'date', 'before_or_equal:' . Carbon::today()->subYears(12)->format('Y-m-d')],
            'birthplace.city' => ['required', 'string', 'max:100', 'regex:/^[A-Za-z.\s]{2,}$/'],
            'birthplace.country' => ['required', 'string', 'max:100', 'regex:/^[A-Za-z.\s]{2,}$/'],
            'address.street' => ['required', 'string', 'max:255'],
            'address.city' => ['required', 'string', 'max:100', 'regex:/^[A-Za-z.\s]{2,}$/'],
            'address.state' => ['nullable', 'string', 'max:100', 'regex:/^[A-Za-z.\s]{2,}$/'],
            'address.country' => ['required', 'string', 'max:100', 'regex:/^[A-Za-z.\s]{2,}$/'],
            'address.zip' => ['nullable', 'string', 'max:20'],
        ], $this->messages);

        $validated['birthdate'] = Carbon::parse($validated['birthday'])->toDateString();
        unset($validated['birthday']);

        $currentData = [
            'username' => $user->username,
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'middlename' => $user->middlename,
            'email' => $user->email,
            'phone' => $user->phone,
            'birthdate' => optional($user->birthdate)->toDateString(),
            'birthplace' => $user->birthplace,
            'address' => $user->address,
        ];

        if ($validated == $currentData) {
            $this->dispatch('notify', [
                'message' => 'No changes detected. Please update your information.',
                'type' => 'error',
            ]);
            return;
        }

        if ($validated['firstname'] !== $currentData['firstname'] || $validated['middlename'] !== $currentData['middlename'] || $validated['lastname'] !== $currentData['lastname'] || $validated['email'] !== $currentData['email']) {
            $this->dispatch('profile-updated');
        }

        $user->update($validated);

        $this->dispatch('notify', [
            'message' => 'Your Information has been updated.',
            'type' => 'success',
        ]);
    }


    public function render()
    {
        return view('livewire.pages.user.settings.update-profile-information-form');
    }
}
