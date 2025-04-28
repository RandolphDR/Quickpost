<form wire:submit="login" class="w-[80%] gap-2 flex flex-col justify-center items-stretch">
    <div>
        <x-input-label for="username" :value="__('Username*')" />
        <x-text-input wire:model="username" id="username" class="block mt-1 w-full" type="text" name="username" required
            autofocus placeholder="Username or Email or Phone Number" autocomplete="username" />
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
        <a href="{{ route('password.request') }}" class="text-sm font-medium text-purple-blue-500 dark:text-neutral-200"
            wire:navigate>Forgot
            password?</a>
    </div>
    <x-primary-button>
        {{ __('Log in') }}
    </x-primary-button>
</form>
