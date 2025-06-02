<form wire:submit="register" class="w-full gap-4 flex flex-col justify-center items-center">
    <header class="w-full flex justify-between items-center bg-white dark:bg-gray-800 shadow-md rounded-xl">
        <aside class="p-4 gap-2 flex justify-center items-center">
            <h1 class="text-lg  text-gray-800 dark:text-neutral-200 font-medium">
                Create New User
            </h1>
        </aside>
        <nav class="p-4 gap-2 flex justify-center items-center">
            <button type="button" onclick="window.history.back()"
                class="group border border-gray-300 dark:border-gray-600 rounded-lg py-1 px-2 gap-1 inline-flex items-center text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 text-sm font-medium transition-colors duration-150">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
                Cancel
            </button>
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-500 active:bg-blue-700 text-white rounded-lg py-1 px-2 gap-1 inline-flex items-center text-sm font-medium transition-colors duration-150">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m10.051 8.102-3.778.322-1.994 1.994a.94.94 0 0 0 .533 1.6l2.698.316m8.39 1.617-.322 3.78-1.994 1.994a.94.94 0 0 1-1.595-.533l-.4-2.652m8.166-11.174a1.366 1.366 0 0 0-1.12-1.12c-1.616-.279-4.906-.623-6.38.853-1.671 1.672-5.211 8.015-6.31 10.023a.932.932 0 0 0 .162 1.111l.828.835.833.832a.932.932 0 0 0 1.111.163c2.008-1.102 8.35-4.642 10.021-6.312 1.475-1.478 1.133-4.77.855-6.385Zm-2.961 3.722a1.88 1.88 0 1 1-3.76 0 1.88 1.88 0 0 1 3.76 0Z" />
                </svg>
                Create User
            </button>
        </nav>
    </header>
    <main
        class="w-full p-6 gap-4 flex flex-col justify-start items-center bg-white dark:bg-gray-800 shadow-md rounded-xl">
        <header class="w-full">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Profile Information
            </h2>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Create the account's profile information and email address.
            </p>
        </header>
        <section class="w-full gap-4 flex flex-col">
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
                        placeholder="Enter your Middlename" class="block w-full mt-1" autofocus
                        autocomplete="additional-name" />
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
                    <x-date-input wire:model="birthday" id="birthday" name="birthday" class="block w-full mt-1"
                        required autocomplete="bday" />
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
                        name="password_confirmation" placeholder="Confirm your Password" class="block w-full mt-1"
                        required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>
        </section>
    </main>
</form>
