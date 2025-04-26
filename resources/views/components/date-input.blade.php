@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge([
        'type' => 'date',
        'class' => '
                text-gray-900
                placeholder-gray-500
                dark:text-gray-300
                dark:placeholder-gray-400
                border-gray-300
                dark:border-gray-700
                bg-white
                dark:bg-gray-900
                focus:border-indigo-500
                dark:focus:border-indigo-600
                focus:ring-indigo-500
                dark:focus:ring-indigo-600
                rounded-md
                shadow-sm
                [&::-webkit-calendar-picker-indicator]:filter-none
                dark:[&::-webkit-calendar-picker-indicator]:invert
            ',
    ]) }}>
