@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge(['type' => 'checkbox', 'class' => 'shrink-0 mt-0.5 border-l-gray-700 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800 cursor-pointer']) }}>
