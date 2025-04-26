<div class="flex flex-col justify-center items-center">
    <div class="flex items-center xl:p-15">
        <form wire:submit="login" class="flex flex-col w-full h-full pb-6 text-center font-outfit-sans">
            <header class="py-4 mb-4">
                <h3 class="mb-3 text-4xl font-bold text-gray-800 dark:text-neutral-200">Log in to your Account
                </h3>
                <p class="text-gray-500 dark:text-neutral-200">
                    Create and Post Instantly.
                </p>
            </header>
            <div>
                <x-input-label for="username" :value="__('Email or Phone Number*')" />
                <x-text-input wire:model="username" id="username" class="block mt-1 w-full" type="text"
                    name="username" required autofocus placeholder="Enter your Email or Phone Number"
                    autocomplete="username" />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password*')" />
                <x-password-input wire:model="password" class="block mt-1" id="password" name="password"
                    placeholder="Enter your Password" autocomplete="current-password" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="flex flex-row justify-between mt-4 mb-8">
                <div class="flex">
                    <x-checkbox id="remember-me" wire:model="remember" />
                    <label for="remember-me"
                        class="text-sm ms-3 font-medium text-purple-blue-500 dark:text-neutral-200 cursor-pointer">Keep
                        me logged in</label>
                </div>
                <a href="{{ route('password.request') }}"
                    class="text-sm font-medium text-purple-blue-500 dark:text-neutral-200" wire:navigate>Forgot
                    password?</a>
            </div>
            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>
            <p class="mt-4 text-sm leading-relaxed text-gray-800 dark:text-neutral-200">
                Not registered yet?
                <a href="{{ route('register') }}" class="font-bold text-gray-800 dark:text-neutral-200" wire:navigate>
                    Create an Account
                </a>
            </p>
        </form>
    </div>
</div>
