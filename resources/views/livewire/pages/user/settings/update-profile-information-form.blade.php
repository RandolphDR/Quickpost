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
        <div class="w-full">
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input wire:model="username" id="username" name="username" type="text" class="mt-1 block w-full"
                required autofocus autocomplete="username" placeholder="Enter your Username" />
            <x-input-error class="mt-2" :messages="$errors->get('username')" />
        </div>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="w-full">
                <x-input-label for="firstname" :value="__('First Name*')" />
                <x-text-input wire:model="firstname" id="firstname" name="firstname" type="text"
                    class="mt-1 block w-full" required autofocus autocomplete="firstname"
                    placeholder="Enter your First Name" />
                <x-input-error class="mt-2" :messages="$errors->get('firstname')" />
            </div>
            <div class="w-full">
                <x-input-label for="middlename" :value="__('Middle Name*')" />
                <x-text-input wire:model="middlename" id="middlename" name="middlename" type="text"
                    class="mt-1 block w-full" required autofocus autocomplete="middlename"
                    placeholder="Enter your Middle Name" />
                <x-input-error class="mt-2" :messages="$errors->get('middlename')" />
            </div>
            <div class="w-full">
                <x-input-label for="lastname" :value="__('Last Name*')" />
                <x-text-input wire:model="lastname" id="lastname" name="lastname" type="text"
                    class="mt-1 block w-full" required autofocus autocomplete="lastname"
                    placeholder="Enter your Last Name" />
                <x-input-error class="mt-2" :messages="$errors->get('lastname')" />
            </div>
        </div>
        <div>
            <x-input-label for="email" :value="__('Email*')" />
            <x-text-input wire:model="email" id="email" name="email" type="email" class="mt-1 block w-full"
                required autocomplete="email" placeholder="Enter your Email" />
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
            <x-input-label for="phone" :value="__('Phone Number*')" />
            <x-text-input wire:model="phone" id="phone" name="phone" type="text" class="mt-1 block w-full"
                required autofocus autocomplete="phone" placeholder="Enter your Phone Number" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>

        <div>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Birth Information') }}
            </h2>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __("Update your account's birth information.") }}
            </p>
        </div>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="w-full">
                <x-input-label for="birthday" :value="__('Birthday*')" />
                <x-date-input wire:model="birthday" id="birthday" name="birthday" class="mt-1 block w-full" required
                    autocomplete="birthday" />
                <x-input-error class="mt-2" :messages="$errors->get('birthday')" />
            </div>
            <div class="w-full">
                <x-input-label for="age" :value="__('Age (Based on your Birthday)')" />
                <x-text-input wire:model="age" id="age" name="age" type="number" class="mt-1 block w-full"
                    required autofocus autocomplete="age" disabled />
                <x-input-error class="mt-2" :messages="$errors->get('age')" />
            </div>
        </div>

        <div>
            <x-input-label :value="__('Birthplace')" />
            <div class="flex flex-col md:flex-row gap-4">
                <div class="w-full">
                    <x-text-input wire:model="birthplace.city" id="birthplace.city" name="birthplace.city"
                        type="text" class="mt-1 block w-full" required autofocus autocomplete="birthplace.city"
                        placeholder="Enter City of Birthplace" />
                    <x-input-error class="mt-2" :messages="$errors->get('birthplace.city')" />
                </div>
                <div class="w-full">
                    <x-text-input wire:model="birthplace.country" id="birthplace.country" name="birthplace.country"
                        type="text" class="mt-1 block w-full" required autofocus autocomplete="birthplace.country"
                        placeholder="Enter Country of Birthplace" />
                    <x-input-error class="mt-2" :messages="$errors->get('birthplace.country')" />
                </div>
            </div>
        </div>
        <div>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Current Address Information') }}
            </h2>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __("Update your account's current address information.") }}
            </p>
        </div>
        <div>
            <x-input-label for="address" :value="__('Current Address*')" />
            <div class="flex flex-col md:flex-row gap-4 py-2">
                <div class="w-full">
                    <x-text-input wire:model="address.street" id="address.street" name="address.street"
                        type="text" class="mt-1 block w-full" required autofocus autocomplete="address.street"
                        placeholder="Enter your Street Address" />
                    <x-input-error class="mt-2" :messages="$errors->get('address.street')" />
                </div>
                <div class="w-full">
                    <x-text-input wire:model="address.city" id="address.city" name="address.city" type="text"
                        class="mt-1 block w-full" required autofocus autocomplete="address.city"
                        placeholder="Enter your City" />
                    <x-input-error class="mt-2" :messages="$errors->get('address.city')" />
                </div>
                <div class="w-full">
                    <x-text-input wire:model="address.state" id="address.state" name="address.state" type="text"
                        class="mt-1 block w-full" required autofocus autocomplete="address.state"
                        placeholder="Enter your Province" />
                    <x-input-error class="mt-2" :messages="$errors->get('address.state')" />
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-4 py-2">
                <div class="w-full">
                    <x-text-input wire:model="address.country" id="address.country" name="address.country"
                        type="text" class="mt-1 block w-full" required autofocus autocomplete="address.country"
                        placeholder="Enter your County" />
                    <x-input-error class="mt-2" :messages="$errors->get('address.country')" />
                </div>
                <div class="w-full">
                    <x-text-input wire:model="address.zip" id="address.zip" name="address.zip" type="text"
                        class="mt-1 block w-full" required autofocus autocomplete="address.zip"
                        placeholder="Enter your Barangay Zip Code" />
                    <x-input-error class="mt-2" :messages="$errors->get('address.zip')" />
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save Changes') }}</x-primary-button>
        </div>
    </form>
</section>
