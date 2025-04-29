<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Volt\Component;

new class extends Component {
    public string $name = '';
    public string $email = '';
    public string $phone = '';

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $this->name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $this->email = Auth::user()->email;
        $this->phone = Auth::user()->phone;
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateProfileInformation(): void
    {
        $user = Auth::user();

        $validated = $this->validate(
            [
                'name' => ['required', 'string', 'max:100', 'regex:/^[A-Za-z.\s]{2,}$/'],
                'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
                'phone' => ['required', 'string', 'max:20', Rule::unique(User::class)->ignore($user->id)],
            ],
            [
                'name.regex' => 'The :attribute must only contain letters and spaces.',
                'email.unique' => 'This :attribute has already been taken.',
                'phone.unique' => 'This :attribute has already been taken.',
                'terms_checkbox.accepted' => 'You must accept the :attribute.',
            ],
        );

        $user->fill($validated);

        if ($user->name === $user->getOriginal('name') && $user->email === $user->getOriginal('email') && $user->phone === $user->getOriginal('phone')) {
            $this->dispatch('notify', [
                'message' => 'No changes detected. Please update your information.',
                'type' => 'error',
            ]);
            return;
        }

        if ($user->isDirty('name')) {
            $this->dispatch('profile-updated', name: $user->name);
        }

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        $this->dispatch('notify', [
            'message' => 'Your Information has been updated.',
            'type' => 'success',
        ]);
    }

    /**
     * Send an email verification notification to the current user.
     */
    public function sendVerification(): void
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false));

            return;
        }

        $user->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }
}; ?>
