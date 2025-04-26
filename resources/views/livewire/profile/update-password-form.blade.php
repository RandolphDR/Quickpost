<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Livewire\Volt\Component;

new class extends Component {
    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Update the password for the currently authenticated user.
     */
    public function updatePassword(): void
    {
        try {
            $validated = $this->validate(
                [
                    'current_password' => ['required', 'string', 'current_password'],
                    'password' => ['required', 'string', Password::defaults(), 'confirmed'],
                ],
                [
                    'current_password.required' => 'Please enter your current password.',
                    'current_password.current_password' => 'Your current password is incorrect.',
                    'password.required' => 'Please enter a new password.',
                    'password.confirmed' => 'The new password confirmation does not match.',
                    'password.string' => 'The new password must be a type of string.',
                ],
            );

            if (Hash::check($validated['password'], Auth::user()->password)) {
                $this->dispatch('notify', [
                    'message' => 'Your new password cannot be the same as the current password.',
                    'type' => 'error',
                    'duration' => 6000,
                ]);
                return;
            }
        } catch (ValidationException $e) {
            $this->reset('current_password', 'password', 'password_confirmation');
            throw $e;
        }

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $this->reset('current_password', 'password', 'password_confirmation');

        $this->dispatch('notify', [
            'message' => 'Your password has been successfully changed.',
            'type' => 'success',
        ]);
    }
}; ?>

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form wire:submit="updatePassword" class="mt-6 space-y-6">
        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-password-input wire:model="current_password" id="update_password_current_password" name="current_password"
                class="mt-1 block w-full" placeholder="Enter your Current Password" autocomplete="current-password" />
            <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-password-input wire:model="password" id="update_password_password" name="password"
                class="mt-1 block w-full" placeholder="Enter your New Password" autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-password-input wire:model="password_confirmation" id="update_password_password_confirmation"
                name="password_confirmation" class="mt-1 block w-full" placeholder="Confirm your New Password" autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
