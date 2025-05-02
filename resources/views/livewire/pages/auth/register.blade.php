<form wire:submit="register" class="gap-6 flex flex-col">
    <div class="flex flex-col gap-4">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="w-full">
                <x-input-label for="firstname" :value="__('First Name*')" />
                <x-text-input wire:model="firstname" id="firstname" type="text" name="firstname"
                    placeholder="Enter your Firstname" class="block w-full mt-1" required autofocus
                    autocomplete="given-name" />
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
            </div>
            <div class="w-full">
                <x-input-label for="lastname" :value="__('Last Name*')" />
                <x-text-input wire:model="lastname" id="lastname" type="text" name="lastname"
                    placeholder="Enter your Lastname" class="block w-full mt-1" required autofocus
                    autocomplete="family-name" />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>
            <div class="w-full">
                <x-input-label for="middlename" :value="__('Middle Name (Optional)')" />
                <x-text-input wire:model="middlename" id="middlename" type="text" name="middlename"
                    placeholder="Enter your Middlename" class="block w-full mt-1" autofocus autocomplete="additional-name" />
                <x-input-error :messages="$errors->get('middlename')" class="mt-2" />
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-4">
            <div class="w-full">
                <x-input-label for="email" :value="__('Email*')" />
                <x-text-input wire:model="email" id="email" type="email" name="email"
                    placeholder="Enter your Email" class="block w-full mt-1" required autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="w-full">
                <x-input-label for="phone" :value="__('Phone*')" />
                <x-text-input wire:model="phone" id="phone" type="tel" name="phone"
                    placeholder="ex. 0912 345 6789" class="block w-full mt-1" required autocomplete="phone" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <div class="w-full">
                <x-input-label for="birthday" :value="__('Birthday*')" />
                <x-date-input wire:model="birthday" id="birthday" name="birthday" class="block w-full mt-1" required
                    autocomplete="bday" />
                <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
            </div>
        </div>

        <div class="w-full">
            <x-input-label for="username" :value="__('Username*')" />
            <x-text-input wire:model="username" id="username" type="text" name="username"
                placeholder="Create your Username" class="block w-full mt-1" autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <div class="flex flex-col md:flex-row gap-4">
            <div class="w-full">
                <x-input-label for="password" :value="__('Password*')" />
                <x-password-input wire:model="password" id="password" name="password"
                    placeholder="Create a Strong Password" class="block w-full mt-1" required
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="w-full">
                <x-input-label for="password_confirmation" :value="__('Confirm Password*')" />
                <x-password-input wire:model="password_confirmation" id="password_confirmation"
                    name="password_confirmation" placeholder="Confirm your Password" class="block w-full mt-1" required
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>
    </div>
    <div class="w-auto gap-4 flex flex-col justify-center items-start">
        <p class="text-xs text-gray-600 dark:text-neutral-400">By clicking Create Account, you agree to our Terms,
            Privacy Policy and Cookies Policy. <br> You may receive SMS Notifications from us and can opt out any time.
        </p>
        <x-primary-button class="w-full">
            {{ __('Create Account') }}
        </x-primary-button>
    </div>
</form>
