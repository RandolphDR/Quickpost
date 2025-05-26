@props(['active'])

@php
    $activeClasses = $active ?? false ? 'bg-gray-200 dark:bg-gray-700' : 'hover:bg-gray-200 dark:hover:bg-gray-700';
@endphp

<a {{ $attributes->merge(['class' => "py-2 px-3 rounded-lg w-full flex items-center gap-2.5 font-outfit-sans font-medium transition duration-200 ease-in-out text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white $activeClasses"]) }}
    wire:navigate>
    {{ $slot }}
</a>
