<div class="gap-4 flex flex-col justify-center items-start">
    <header class="w-full gap-4 flex flex-col justify-center items-start">
        <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-100">About</h2>
        <hr class="w-full border-gray-400 dark:border-gray-600" />
        <p class="text-gray-700 dark:text-neutral-300 text-center w-full">{{ $user->bio }}</p>
        <hr class="w-full border-gray-400 dark:border-gray-600" />
        {{-- <textarea
            class="mt-4 w-full text-center border border-gray-300 dark:border-gray-600 rounded-lg resize-none bg-transparent text-gray-700 dark:text-gray-300 placeholder-gray-400 dark:placeholder-gray-500 disabled:border-none disabled:pointer-events-none"
            placeholder="Write something..." disabled>{{ $user->bio }}</textarea> --}}
    </header>
    <main class="w-full text-sm text-gray-700 dark:text-neutral-300 gap-4 flex flex-col">
        <div class="gap-2 flex justify-start items-end">
            <svg class="w-5 h-5 text-gray-900 dark:text-neutral-100" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                <circle cx="12" cy="10" r="3"></circle>
            </svg>
            <p>
                Lives in {{ $address['city'] }}, {{ $address['state'] }}, {{ $address['country'] }}
            </p>
        </div>
        <div class="gap-2 flex justify-start items-end">
            <svg class="w-5 h-5 text-gray-900 dark:text-neutral-100" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 17.4302V15h4.33332M5 17.4302V21h14v-6h-4.3333M5 17.4302c.38672.3365.923.5698 1.66666.5698 2.66664 0 2.66666-3 2.66666-3m5.33338 0H9.33332m5.33338 0s0 3-2.6667 3c-2.66668 0-2.66668-3-2.66668-3m5.33338 0s0 3 2.6666 3c.7437 0 1.28-.2333 1.6667-.5698m-7-9.43017c.1093 0 2-1.11929 2-2.5s-1.9079-2.5-2-2.5c-.0921 0-2 1.11929-2 2.5s1.8947 2.5 2 2.5Zm0 0V11m-6 0v4h12v-4H6Z" />
            </svg>
            <p>Born on {{ $birthday }}</p>
        </div>
        <div class="gap-2 flex justify-start items-end">
            <svg class="w-5 h-5 text-gray-900 dark:text-neutral-100" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M4 9.05H3v2h1v-2Zm16 2h1v-2h-1v2ZM10 14a1 1 0 1 0 0 2v-2Zm4 2a1 1 0 1 0 0-2v2Zm-3 1a1 1 0 1 0 2 0h-2Zm2-4a1 1 0 1 0-2 0h2Zm-2-5.95a1 1 0 1 0 2 0h-2Zm2-3a1 1 0 1 0-2 0h2Zm-7 3a1 1 0 0 0 2 0H6Zm2-3a1 1 0 1 0-2 0h2Zm8 3a1 1 0 1 0 2 0h-2Zm2-3a1 1 0 1 0-2 0h2Zm-13 3h14v-2H5v2Zm14 0v12h2v-12h-2Zm0 12H5v2h14v-2Zm-14 0v-12H3v12h2Zm0 0H3a2 2 0 0 0 2 2v-2Zm14 0v2a2 2 0 0 0 2-2h-2Zm0-12h2a2 2 0 0 0-2-2v2Zm-14-2a2 2 0 0 0-2 2h2v-2Zm-1 6h16v-2H4v2ZM10 16h4v-2h-4v2Zm3 1v-4h-2v4h2Zm0-9.95v-3h-2v3h2Zm-5 0v-3H6v3h2Zm10 0v-3h-2v3h2Z" />
            </svg>
            <p>Joined {{ $createdAt }}</p>
        </div>
    </main>
</div>
