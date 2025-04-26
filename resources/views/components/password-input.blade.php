@props(['disabled' => false])

<div class="w-full relative">
    <input
        {{ $attributes->merge([
            'type' => 'password',
            'class' =>
                'w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm',
        ]) }}
        @disabled($disabled)
        id="{{ $attributes['id'] }}"
        onblur="if(this.type === 'text') { this.type = 'password'; this.nextElementSibling.querySelector('.eye-icon').classList.remove('hidden'); this.nextElementSibling.querySelector('.eye-slash-icon').classList.add('hidden'); }">

    <button type="button"
        class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-hidden focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500"
        onclick="const input = document.getElementById('{{ $attributes['id'] }}'); const eyeIcon = this.querySelector('.eye-icon'); const eyeSlashIcon = this.querySelector('.eye-slash-icon'); if (input.type === 'password') { input.type = 'text'; eyeIcon.classList.add('hidden'); eyeSlashIcon.classList.remove('hidden'); } else { input.type = 'password'; eyeIcon.classList.remove('hidden'); eyeSlashIcon.classList.add('hidden'); } input.focus();">
        <svg class="eye-icon shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
            <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
            <path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
            <line x1="2" x2="22" y1="2" y2="22"></line>
        </svg>

        <svg class="eye-slash-icon shrink-0 size-3.5 hidden" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
            <circle cx="12" cy="12" r="3"></circle>
        </svg>
    </button>
</div>
