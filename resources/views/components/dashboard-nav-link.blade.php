@props(['active'])

@php
    $classes = $active
        ? 'py-2 px-3 bg-blue-600 rounded-lg w-full flex items-center gap-2.5 text-neutral-100 font-outfit-sans font-medium transition duration-300 ease-in-out'
        : 'py-2 px-3 rounded-lg w-full flex items-center gap-2.5 text-gray-400 hover:bg-gray-700 hover:text-neutral-100 font-outfit-sans font-medium transition duration-300 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
