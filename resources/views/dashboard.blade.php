@section('title', 'Dashboard')

<x-dashboard-layout>
    <header class="w-full">
        <livewire:pages.dashboard.header />
    </header>

    <hr class="w-full border-gray-300 dark:border-gray-600">

    <section class="w-full gap-4 flex flex-col py-2">
        <header class="w-full gap-2 flex flex-col ">
            <h1 class="text-gray-800 dark:text-neutral-200 font-medium">
                Overview of your Dashboard
            </h1>
        </header>
        <div class="w-full gap-5 flex">
            <livewire:components.dashboard.users.summary-card lazy />
            <livewire:components.dashboard.blogs.summary-card lazy />
        </div>
    </section>
</x-dashboard-layout>
