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

<section>
    <x-auth-session-status :status="session('status')" />
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form wire:submit="updateProfileInformation" class="mt-6 space-y-6">
        <div>
            <x-input-label for="name" :value="__('Full Name')" />
            <x-text-input wire:model="name" id="name" name="name" type="text" class="mt-1 block w-full" required
                autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" name="email" type="email" class="mt-1 block w-full"
                required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !auth()->user()->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button wire:click.prevent="sendVerification"
                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
        <div>
            <x-input-label for="phone" :value="__('Phone Number')" />
            <x-text-input wire:model="phone" id="phone" name="phone" type="text" class="mt-1 block w-full"
                required autofocus autocomplete="phone" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
