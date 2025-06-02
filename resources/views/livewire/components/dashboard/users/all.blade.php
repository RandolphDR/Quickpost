<div class="w-full">
    <div wire:loading.flex class="col-span-full gap-2 flex flex-col items-center justify-center py-4">
        <div class="flex flex-row gap-2">
            <div class="w-3 h-3 rounded-full bg-blue-600 animate-bounce [animation-delay:.1s]"></div>
            <div class="w-3 h-3 rounded-full bg-blue-600 animate-bounce [animation-delay:.3s]"></div>
            <div class="w-3 h-3 rounded-full bg-blue-600 animate-bounce [animation-delay:.5s]"></div>
        </div>
        <p class="text-gray-600 dark:text-neutral-400">
            Please wait while we load more users...
        </p>
    </div>

    <div wire:loading.remove>
        <div class="rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-300 dark:bg-gray-700 rounded-t-lg">
                    <tr>
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            ID
                        </th>
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            User Profile
                        </th>
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Phone
                        </th>
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Verified Status
                        </th>
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Role
                        </th>
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Created At
                        </th>
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Last Updated At
                        </th>
                        <th
                            class="px-4 py-2 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($allUsers as $user)
                        <tr>
                            <td class="px-4 py-4 text-sm text-gray-900 dark:text-neutral-200">{{ $user->id }}</td>
                            <td class="px-4 py-4">
                                <div class="gap-2 flex justify-center items-center">
                                    <img src="{{ asset($user->avatar) }}" alt="avatar"
                                        class="rounded-full w-10 h-10 bg-gray-400">
                                    <span class="min-w-0 flex-1">
                                        <a href="{{ route('admin.user.profile', ['username' => $user->username]) }}"
                                            class="text-gray-900 dark:text-neutral-200 text-sm truncate gap-1 flex items-center hover:underline hover:underline-offset-2 transition-colors"
                                            title="View profile" wire:navigate>
                                            {{ $user->fullname }}
                                            @if ($user->is_verified)
                                                <svg class="w-4 h-4 text-blue-600" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @endif
                                            {{ $user->id === Auth::user()->id ? '(You)' : '' }}
                                        </a>
                                        <p class="text-gray-600 dark:text-gray-400 text-xs truncate max-w-[200px]"
                                            title="{{ $user->email }}">
                                            {{ $user->email }}
                                        </p>
                                    </span>
                                </div>
                            </td>
                            <td class="px-4 py-2 text-sm font-semibold text-blue-700 dark:text-blue-400">
                                {{ $user->phone }}
                            </td>
                            <td class="px-4 py-4 text-sm">
                                @if ($user->is_verified)
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-600 text-neutral-100">
                                        Verified User
                                    </span>
                                @else
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                        Not Verified
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-900 dark:text-neutral-200">
                                {{ ucfirst($user->role) }}
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-900 dark:text-neutral-200">
                                {{ $user->created_at->format('F j, Y \a\t g:i a') }}
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-900 dark:text-neutral-200">
                                {{ $user->updated_at->format('F j, Y \a\t g:i a') }}
                            </td>
                            <td class="">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button type="button">
                                            <svg class="w-6 h-6 text-gray-900 dark:text-neutral-200"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                    d="M12 6h.01M12 12h.01M12 18h.01" />
                                            </svg>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('admin.user.profile', ['username' => $user->username])" title="View Profile">
                                            Visit Profile
                                        </x-dropdown-link>
                                        <x-dropdown-link>
                                            Edit
                                        </x-dropdown-link>
                                    </x-slot>
                                </x-dropdown>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <nav class="mt-8 w-full">
            {{ $allUsers->links('vendor.livewire.tailwind') }}
        </nav>
    </div>
</div>
