<div class="w-full flex flex-col justify-center items-center dark:bg-gray-900">
    <div class="p-6">
        <form wire:submit="register" class="gap-6 flex flex-col font-outfit-sans">
            <header class="text-center">
                <h3 class="text-4xl font-bold text-gray-800 dark:text-neutral-200">Create your Account</h3>
                <p class="mt-2 text-gray-500 dark:text-neutral-400">This is where your posting journey begins.</p>
            </header>

            <div class="flex flex-col gap-4">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="full">
                        <x-input-label for="firstname" :value="__('First Name')" />
                        <x-text-input wire:model="firstname" id="firstname" type="text" name="firstname"
                            placeholder="Enter your Firstname" class="block w-full mt-1" required autofocus
                            autocomplete="firstname" />
                        <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                    </div>
                    <div class="full">
                        <x-input-label for="lastname" :value="__('Last Name')" />
                        <x-text-input wire:model="lastname" id="lastname" type="text" name="lastname"
                            placeholder="Enter your Lastname" class="block w-full mt-1" required autofocus
                            autocomplete="lastname" />
                        <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-4">
                    <div class="w-full">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input wire:model="email" id="email" type="email" name="email"
                            placeholder="Enter your Email" class="block w-full mt-1" required autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="w-full">
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input wire:model="phone" id="phone" type="text" name="phone"
                            placeholder="ex. 0912 345 6789" class="block w-full mt-1" required autocomplete="tel" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>
                </div>

                <div>
                    <x-input-label for="birthday" :value="__('Birthday')" />
                    <x-date-input wire:model="birthday" id="birthday" name="birthday" class="block w-full mt-1"
                        required autocomplete="bday" />
                    <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="password" :value="__('Password')" />
                    <x-password-input wire:model="password" id="password" name="password"
                        placeholder="Create a Strong Password" class="block w-full mt-1" required
                        autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-password-input wire:model="password_confirmation" id="password_confirmation"
                        name="password_confirmation" placeholder="Confirm your Password" class="block w-full mt-1"
                        required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>

            <div>
                <x-primary-button class="w-full">
                    {{ __('Create Account') }}
                </x-primary-button>
                <p class="text-center mt-4 text-sm text-gray-600 dark:text-neutral-400">
                    Already have an account?
                    <a href="{{ route('login') }}" class="font-semibold hover:underline dark:text-neutral-200"
                        wire:navigate>
                        Log In
                    </a>
                </p>
            </div>
        </form>
    </div>
</div>
