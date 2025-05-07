<a {{ $attributes->merge(['class' => 'py-1 px-2 inline-flex justify-center items-center rounded-lg border border-transparent bg-blue-600 text-sm text-white hover:bg-blue-800 active:bg-blue-600 focus:bg-blue-700 focus:outline-none active:ring-2 active:ring-indigo-500 active:ring-offset-2 dark:focus:ring-offset-gray-800 tracking-wider transition ease-in-out duration-150']) }} wire:navigate>
    {{ $slot }}
</a>
